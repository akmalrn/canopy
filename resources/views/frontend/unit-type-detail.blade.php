@extends('frontend.layouts')
@section('title', $category->category)
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url('{{ asset($category->path) }}')">

        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Beranda</a></li>
                    <li><span>/</span></li>
                    <li>{{ $category->category }}</li>
                </ul>
                <h2>{{ $category->category }} Detail</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Apartment Details Start-->
    @foreach ($services as $service)
        <section class="apartment-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="apartment-details__img-box">
                            <div class="apartment-details__img">
                                @if ($service->paths->isNotEmpty())
                                    <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach ($service->paths as $index => $path)
                                                <div class="carousel-item @if ($index == 0) active @endif">
                                                    <img src="{{ asset($path->path) }}" class="d-block w-100 img-fluid"
                                                        alt="...">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#serviceCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#serviceCarousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                @else
                                    <p>Tidak ada Gambar Terkait Unit Ini.</p>
                                @endif
                            </div>
                        </div>
                        <div class="apartment-details__content-box">
                            <h3 class="apartment-details__content-title">{{ $service->title }}</h3>
                            <p class="apartment-details__text-1">{!! $service->description !!}</p>
                        </div>
                        <br><br><br>
                        @if ($service->buildingServices->isNotEmpty())
                        @foreach ($service->buildingServices as $index => $buildingService)
                            <div class="apartment-details__img-box">
                                <div class="apartment-details__img">
                                    <div id="serviceCarousel{{ $index }}" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset($buildingService->room_path) }}" class="d-block w-100 img-fluid" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="apartment-details__list-box">
                                    <ul class="list-unstyled apartment-details__list">
                                        <li>
                                            <div class="apartment-details__list-content">
                                                <h3>{{ $buildingService->surface_area }}</h3>
                                                <p>Luas Permukaan</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="apartment-details__list-content">
                                                <h3>{{ $buildingService->building_area }}</h3>
                                                <p>Luas Bangunan</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="apartment-details__list-content">
                                                <h3>{{ $buildingService->bedrooms }}</h3>
                                                <p>Bedrooms</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="apartment-details__list-content">
                                                <h3>{{ $buildingService->bathrooms }}</h3>
                                                <p>Bathrooms</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="apartment-details__list-content">
                                                <h3>{{ $buildingService->car_port }}</h3>
                                                <p>Car Port</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <br><br><br><br>
                        @endforeach
                    @else
                        <p>No building service details available.</p>
                    @endif

                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <!--Apartment Details End-->
@endsection
