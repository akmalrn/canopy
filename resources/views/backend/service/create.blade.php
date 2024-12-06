@extends('backend.layout')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Create New Service</h3>
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
                        <a href="{{ route('services.index') }}">Service</a>
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
                            <h4 class="card-title">Create New Service</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label for="category_id">Category</label>
                                            <select id="category_id" name="category_id"
                                                class="form-control @error('category_id') is-invalid @enderror" required>
                                                <option value="">Select Category</option>
                                                @foreach ($categoryservice as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label for="title">Title</label>
                                            <input id="title" type="text"
                                                class="form-control @error('title') is-invalid @enderror" name="title"
                                                placeholder="Enter service title" required>
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label for="overview">Overview</label>
                                            <input id="overview" type="text"
                                                class="form-control @error('overview') is-invalid @enderror" name="overview"
                                                placeholder="Enter service overview" required>
                                            @error('overview')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group form-group-default">
                                            <label for="description">Description</label>
                                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"
                                                placeholder="Enter service description" rows="4"></textarea>
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group form-group-default">
                                            <label for="paths">Paths</label>
                                            <div class="input-group mb-3">
                                                <div id="paths-container" class="d-flex align-items-center">
                                                    <input type="file" name="paths[]" class="form-control" required>
                                                    <button type="button" class="btn btn-success add-path ms-2">+</button>
                                                </div>
                                            </div>
                                            @error('paths')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('services.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pathsContainer = document.getElementById('paths-container');

            // Fungsi untuk menambah field path
            document.addEventListener('click', function(e) {
                // Menambahkan field input file
                if (e.target.classList.contains('add-path')) {
                    e.preventDefault();

                    const newInputGroup = document.createElement('div');
                    newInputGroup.className = 'input-group mb-3';

                    newInputGroup.innerHTML = `
                <input type="file" name="paths[]" class="form-control" required>
                <button type="button" class="btn btn-danger remove-path">-</button>
            `;

                    pathsContainer.appendChild(newInputGroup);
                }

                // Hapus field path
                if (e.target.classList.contains('remove-path')) {
                    e.target.closest('.input-group').remove();
                }
            });
        });
    </script>
@endsection
