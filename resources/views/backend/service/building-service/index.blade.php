@extends('backend.layout')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Building Services</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Building Services</a>
                    </li>
                </ul>
            </div>

            {{-- Table for Building Services --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="card-title">Building Services</h4>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-primary btn-round ms-2"
                                        onclick="window.location.href='{{ route('building-services.create') }}'">
                                        <i class="fa fa-plus"></i> Add Building Service
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Surface Area</th>
                                            <th>Building Area</th>
                                            <th>Bedrooms</th>
                                            <th>Bathrooms</th>
                                            <th>Car Port</th>
                                            <th>Image</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>Surface Area</th>
                                            <th>Building Area</th>
                                            <th>Bedrooms</th>
                                            <th>Bathrooms</th>
                                            <th>Car Port</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($buildingServices as $service)
                                            <tr>
                                                <td>{{ $service->service->title }}</td>
                                                <td>{{ $service->surface_area }}</td>
                                                <td>{{ $service->building_area }}</td>
                                                <td>{{ $service->bedrooms }}</td>
                                                <td>{{ $service->bathrooms }}</td>
                                                <td>{{ $service->car_port }}</td>
                                                <td><img src="{{ asset($service->room_path) }}" alt="Building Image" style="max-width: 100px;"></td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <form action="{{ route('building-services.edit', $service->id) }}"
                                                            method="GET" style="display: inline;">
                                                            @csrf
                                                            <button type="submit" data-bs-toggle="tooltip"
                                                                title="Edit Building Service" class="btn btn-link btn-primary">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                        </form>

                                                        <form action="{{ route('building-services.destroy', $service->id) }}"
                                                            method="POST" id="delete-form-{{ $service->id }}"
                                                            style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" data-bs-toggle="tooltip"
                                                                title="Delete Building Service" class="btn btn-link btn-danger"
                                                                onclick="confirmDelete({{ $service->id }})">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
