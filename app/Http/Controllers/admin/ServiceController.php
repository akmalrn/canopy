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
        $services = Service::all();
        return view('backend.service.index', compact('services'));
    }

    public function create()
    {
        return view('backend.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required|image|mimes:jpg,jpeg,png,svg,webp',
            'title' => 'required|string|max:255',
            'overview' => 'required|string|max:500',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(('uploads/services'), $fileName);
        }

        Service::create([
            'title' => $request->input('title'),
            'overview' => $request->input('overview'),
            'description' => $request->input('description'),
            'path' => isset($fileName) ? 'uploads/services/' . $fileName : null,
        ]);

        return redirect()->route('services.index')->with('success', 'Service berhasil ditambahkan');
    }

    public function edit(Service $service)
    {
        return view('backend.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'path' => 'nullable|image|mimes:jpg,jpeg,png,svg,webp',
            'title' => 'required|string|max:255',
            'overview' => 'required|string|max:500',
            'description' => 'required|string',
        ]);

        $service = Service::findOrFail($id);

        if ($request->hasFile('path')) {
            if ($service->path && file_exists(($service->path))) {
                unlink(($service->path));
            }

            $file = $request->file('path');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(('uploads/services'), $fileName);

            $service->path = 'uploads/services/' . $fileName;
        }

        $service->title = $request->input('title');
        $service->overview = $request->input('overview');
        $service->description = $request->input('description');

        $service->save();

        return redirect()->route('services.index')->with('success', 'Service berhasil diperbarui');
    }

    public function destroy(Service $service)
    {
        if ($service->path && file_exists(($service->path->path))) {
            unlink(($service->path->path));
        }
        $service->path()->delete();

        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service berhasil dihapus');
    }
}
