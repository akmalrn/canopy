<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\BuildingService;
use App\Models\admin\Service;
use App\Models\admin\TypeService;
use Illuminate\Http\Request;

class BuildingServiceController extends Controller
{
    public function index()
    {
        $buildingServices = BuildingService::with(['service', 'typeService'])->get();
        return view('backend.service.building-service.index', compact('buildingServices'));
    }

    public function create()
    {
        $services = Service::all();
        $typeServices = TypeService::all();
        return view('backend.service.building-service.create', compact('services', 'typeServices'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'type_id' => 'required|exists:type_services,id',
            'surface_area' => 'required|string',
            'building_area' => 'required|string',
            'bedrooms' => 'required|string',
            'bathrooms' => 'required|string',
            'car_port' => 'required|string',
            'room_path' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
        ]);

        $data = $request->all();

        if ($request->hasFile('room_path')) {
            $file = $request->file('room_path');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/services'), $filename);
            $data['room_path'] = 'uploads/services/' . $filename;
        }

        BuildingService::create($data);

        return redirect()->route('building-services.index')->with('success', 'Building Service added successfully.');
    }


    public function edit(BuildingService $buildingService)
    {
        $services = Service::all();
        $typeServices = TypeService::all();
        return view('backend.service.building-service.edit', compact('buildingService', 'services', 'typeServices'));
    }

    public function update(Request $request, BuildingService $buildingService)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'type_id' => 'required|exists:type_services,id',
            'surface_area' => 'required|string',
            'building_area' => 'required|string',
            'bedrooms' => 'required|string',
            'bathrooms' => 'required|string',
            'car_port' => 'required|string',
            'room_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ]);

        $data = $request->all();

        if ($request->hasFile('room_path')) {
            if ($buildingService->room_path && file_exists(public_path($buildingService->room_path))) {
                unlink(public_path($buildingService->room_path));
            }

            $file = $request->file('room_path');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/services'), $filename);
            $data['room_path'] = 'uploads/services/' . $filename;
        }

        $buildingService->update($data);

        return redirect()->route('building-services.index')->with('success', 'Building Service updated successfully.');
    }

    public function destroy(BuildingService $buildingService)
    {
        if ($buildingService->room_path && file_exists(($buildingService->room_path))) {
            unlink(public_path($buildingService->room_path));
        }

        $buildingService->delete();

        return redirect()->route('building-services.index')->with('success', 'Building Service deleted successfully.');
    }
}
