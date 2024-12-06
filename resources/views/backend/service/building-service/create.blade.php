@extends('backend.layout')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Create New Building Service</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('building-services.index') }}">Building Services</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Create</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create New Building Service</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('building-services.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- Service ID -->
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label for="service_id">Service</label>
                                            <select id="service_id" name="service_id"
                                                class="form-control @error('service_id') is-invalid @enderror" required>
                                                <option value="">Select Service</option>
                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id }}">{{ $service->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('service_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Type ID -->
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label for="type_id">Service Type</label>
                                            <select id="type_id" name="type_id"
                                                class="form-control @error('type_id') is-invalid @enderror" required>
                                                <option value="">Select Type</option>
                                                @foreach ($typeServices as $type)
                                                    <option value="{{ $type->id }}">{{ $type->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('type_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Surface Area -->
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label for="surface_area">Surface Area (m²)</label>
                                            <input id="surface_area" type="text"
                                                class="form-control @error('surface_area') is-invalid @enderror" name="surface_area"
                                                placeholder="Enter surface area in square meters" required>
                                            @error('surface_area')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Building Area -->
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label for="building_area">Building Area (m²)</label>
                                            <input id="building_area" type="text"
                                                class="form-control @error('building_area') is-invalid @enderror" name="building_area"
                                                placeholder="Enter building area in square meters" required>
                                            @error('building_area')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Bedrooms -->
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label for="bedrooms">Number of Bedrooms</label>
                                            <input id="bedrooms" type="text"
                                                class="form-control @error('bedrooms') is-invalid @enderror" name="bedrooms"
                                                placeholder="Enter number of bedrooms" required>
                                            @error('bedrooms')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Bathrooms -->
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label for="bathrooms">Number of Bathrooms</label>
                                            <input id="bathrooms" type="text"
                                                class="form-control @error('bathrooms') is-invalid @enderror" name="bathrooms"
                                                placeholder="Enter number of bathrooms" required>
                                            @error('bathrooms')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Car Port -->
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label for="car_port">Number of Car Ports</label>
                                            <input id="car_port" type="text"
                                                class="form-control @error('car_port') is-invalid @enderror" name="car_port"
                                                placeholder="Enter number of car ports" required>
                                            @error('car_port')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Room Image Path -->
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label for="room_path">Room Image</label>
                                            <input id="room_path" type="file"
                                                class="form-control @error('room_path') is-invalid @enderror" name="room_path"
                                                required>
                                            @error('room_path')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-primary">Save Building Service</button>
                                    <a href="{{ route('building-services.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
