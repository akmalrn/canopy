<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CategoryService;
use App\Models\admin\Service;
use App\Models\admin\TypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $categoryservices = CategoryService::all();
        if ($request->has('category_id') && $request->category_id != '') {
            $services = Service::where('category_id', $request->category_id)->get();
        } else {
            $services = Service::take(11)->get();
        }
        return view('backend.service.index', compact('categoryservices', 'services'));
    }

    public function create()
    {
        $typeservices = TypeService::all();
        $categoryservice = CategoryService::all();
        return view('backend.service.create', compact('typeservices', 'categoryservice'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'overview' => 'required|string|max:500',
            'description' => 'required|string',
            'category_id' => 'required|exists:category_services,id',
            'paths.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar tambahan
        ]);

        // Membuat dan menyimpan data ke dalam tabel services
        $service = Service::create([
            'title' => $request->input('title'),
            'overview' => $request->input('overview'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
        ]);

        // Menyimpan gambar tambahan di paths
        if ($request->has('paths')) {
            foreach ($request->file('paths') as $file) {
                // Menyimpan gambar tambahan di uploads/services
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/services'), $fileName);
                // Menyimpan path gambar dalam tabel paths terkait
                $service->paths()->create(['path' => 'uploads/services/' . $fileName]);
            }
        }

        // Redirect atau kembali ke halaman index setelah berhasil disimpan
        return redirect()->route('services.index')->with('success', 'Service berhasil ditambahkan');
    }



    public function edit(Service $service)
    {
        $categories = CategoryService::all();
        $types = TypeService::all();
        return view('services.edit', compact('service', 'categories', 'types'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'overview' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:category_services,id',
            'type_id' => 'required|exists:type_services,id',
            'surface_area' => 'required',
            'building_area' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'car_port' => 'required',
            'room_path' => 'nullable|image'
        ]);

        if ($request->hasFile('room_path')) {
            $path = $request->file('room_path')->store('rooms', 'public');
            $service->update([
                'room_path' => $path
            ]);
        }

        $service->update([
            'title' => $request->title,
            'overview' => $request->overview,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'surface_area' => $request->surface_area,
            'building_area' => $request->building_area,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'car_port' => $request->car_port
        ]);

        return redirect()->route('services.index');
    }


    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }

    public function deleteImage($serviceId, $pathId)
    {
        // Find the service and the path
        $service = Service::findOrFail($serviceId);
        $path = $service->paths()->findOrFail($pathId);

        // Delete the file from storage
        if (file_exists(public_path($path->path))) {
            unlink(public_path($path->path));
        }

        // Delete the path record from the database
        $path->delete();

        return redirect()->route('services.edit', $serviceId)->with('success', 'Image deleted successfully.');
    }
}
