@extends('frontend.layouts')
@section('title', 'Layanan JRC CANOPY')
@section('content')
      <!--Page Header Start-->
      <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assetsfront/images/backgrounds/page-header-bg.png);">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Layanan</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('index') }}">Beranda</a></li>
                        <li><span class="icon-angle-left"></span></li>
                        <li>Layanan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Services Page Start-->
    <section class="services-page">
        <div class="container">
            <div class="row">
                <!--Services One Single Start-->
                @foreach ($services as $service)
                <div class="col-xl-4">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img src="{{ asset($service->path) }}" alt="{{ $service->title }}"  width="100px" height="200px" style=" object-fit: cover;">
                            </div>
                            <div class="services-one__icon">
                                <span class="icon-paint"></span>
                            </div>
                        </div>
                        <div class="services-one__content">
                            <h3 class="services-one__title"><a href="{{ route('detail_service', $service->id) }}">{{ $service->title }}</a>
                            </h3>
                            <p class="services-one__text">{{ $service->overview }}</p>
                            <div class="services-one__btn-box">
                                <a href="{{ route('detail_service', $service->id) }}" class="services-one__btn thm-btn">Baca Selengkapnya<span
                                        class="icon-dubble-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Services One Single End-->
            </div>
        </div>
    </section>
    <!--Services Page End-->
@endsection
