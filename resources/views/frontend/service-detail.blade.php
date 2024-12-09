@extends('frontend.layouts')
@section('title', $service->title)
@section('content')
          <!--Page Header Start-->
          <section class="page-header">
            <div class="page-header__bg" style="background-image: url('{{ asset($service->path) }}');">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>{{ $service->title }}</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ route('index') }}">Beranda</a></li>
                            <li><span class="icon-angle-left"></span></li>
                            <li><a href="{{ route('services') }}">Layanan</a></li>
                            <li><span class="icon-angle-left"></span></li>
                            <li>{{ $service->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Service Details Start-->
        <section class="service-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="service-details__left">
                            <div class="service-details__content-one">
                                <h2 class="service-details__title-one">{{ $service->title }}</h2>
                                <div class="service-details__img-one">
                                    <img src="{{ asset($service->path) }}" alt="{{ $service->title }}">
                                </div>
                            </div>
                            <div class="service-details__content-two">
                                <p class="service-details__text-2">{!! $service->description !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="service-details__sidebar">
                            <div class="service-details__service-list-box">
                                <h4 class="service-details__sidebar-title">Layanan Utama</h4>
                                <ul class="service-details__service-list list-unstyled">
                                    @foreach ($services as $service)
                                    <li>
                                        <a href="{{ route('detail_service', $service->id) }}"> <span
                                                class="icon-dubble-arrow-right"></span>
                                            {{ $service->title }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Service Details End-->
@endsection
