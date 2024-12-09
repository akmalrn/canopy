@extends('frontend.layouts')
@section('title', $aboutUs->title)
@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assetsfront/images/backgrounds/page-header-bg.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Tentang Kami</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Beranda</a></li>
                    <li><span class="icon-angle-left"></span></li>
                    <li>Tentang Kami</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->


<!--About One Start -->
<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="about-one__left  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-one__img">
                        <img src="{{ asset($aboutUs->path) }}" alt="{{ $aboutUs->title }}"
                            style="max-width: 400px; max-height: 500px; width: 400px; height: 500px;">
                        <div class="about-one__shape-3">
                            <img src="assetsfront/images/shapes/about-shape-3.png" alt="">
                        </div>
                        <div class="about-one__shape-4">
                            <img src="assetsfront/images/shapes/about-shape-4.png" alt="">
                        </div>
                        <div class="about-one__shape-1">
                            <img src="assetsfront/images/shapes/about-shape-1.png" alt="">
                        </div>
                        <div class="about-one__shape-2">
                            <img src="assetsfront/images/shapes/about-shape-2.png" alt="">
                        </div>
                        <div class="about-one__happy-client">
                            <div class="about-one__client-img-box">
                                <ul class="about-one__client-img-list list-unstyled">
                                    @foreach ($testimonials as $testimonial)
                                        <li>
                                            <div class="about-one__client-img">
                                                <img src="{{ asset($testimonial->path) }}" alt="">
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="about-one__happy-client-content">
                                <p class="about-one__count-text">Klien Senang</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-one__right">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">Tentang Kami</span>
                        </div>
                        <h2 class="section-title__title">{{ $aboutUs->title ?? '' }}</h2>
                    </div>
                    <div class="about-one__main-tab-box tabs-box">
                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab active-tab" id="skills">
                                <div class="about-one__tab-content-box">
                                    <p class="about-one__text-1">{!! $aboutUs->description ?? '' !!}</p>
                                    <br>
                                    <div class="about-one__points-box">
                                        <ul class="about-one__points list-unstyled">
                                            @foreach ($superioritys as $superiority)
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-cheack"></span>
                                                    </div>
                                                    <p>{{ $superiority->title }}</p>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="about-one__btn-box">
                                        <a href="{{ route('about') }}" class="about-one__btn thm-btn">Selengkapnya<span
                                                class="icon-dubble-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--About One End --><!-- Sliding Text One Start -->
</section>
<!--About One End -->
@endsection
