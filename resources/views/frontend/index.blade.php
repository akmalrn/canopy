@extends('frontend.layouts')
@section('title', $configuration->title ?? '')
@section('content')
    <!-- Main Sllider Start -->
    <section class="main-slider">
        <div class="main-slider__carousel owl-theme owl-carousel">
            @foreach ($sliders as $slider)
                <div class="item">
                    <div class="main-slider__bg" style="background-image: url({{ asset($slider->path) }});">
                    </div><!-- /.slider-one__bg -->
                    <div class="main-slider__shape-1"></div>
                    <div class="main-slider__shape-2"
                        style="background-image: url(assetsfront/images/shapes/main-slider-shape-2.png);"></div>
                    <div class="container">
                        <div class="main-slider__content">
                            <div class="main-slider__content-shape-1">
                                <img src="assetsfront/images/shapes/main-slider-content-shape-1.png" alt="">
                            </div>
                            <h2 class="main-slider__title">{{ $slider->title }}</h2>
                            <div class="main-slider__btn-and-call-box">
                                <div class="main-slider__btn-box">
                                    <a href="{{ route('services') }}" class="thm-btn-two main-slider__btn">Dapatkan
                                        Layanan<span class="icon-dubble-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!--Main Sllider Start --> <!--About One Start -->
    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-one__left  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-one__img">
                            <img src="{{ asset($aboutUs->path ?? '') }}" alt="{{ $aboutUs->title ?? '' }}" style="object-fit: cover; width:500px; height:500px;">
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

    <section class="counter-one">
        <div class="counter-one__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="counter-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">pembicaraan angka</span>
                                </div>
                                <h2 class="section-title__title">Layanan atap <span>unggul </span> untuk semua kebutuhan
                                </h2>
                            </div>
                            <p class="counter-one__text">Layanan atap melibatkan pemasangan, pemeliharaan, dan
                                memperbaiki
                                atap untuk bangunan perumahan dan komersial. Kontraktor atap menawarkan</p>
                            <div class="counter-one__need-help">
                                <div class="icon">
                                    <span class="icon-call"></span>
                                </div>
                                <div class="content">
                                    <p>Butuh Bantuan?</p>
                                    <h4><a href="https://wa.me/{{ $contact->phone_number ?? '' }}?text=Permisi+Admin"
                                            target="blank">+{{ $contact->phone_number ?? '' }}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="counter-one__right">
                            <div class="row">
                                <!--Counter One Single Start-->
                                @foreach ($superioritys as $superiority)
                                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                                        <div class="counter-one__single">
                                            <div class="counter-one__icon-and-count-box">
                                                <div class="counter-one__icon">
                                                    {!! $superiority->icon !!}
                                                </div>
                                            </div>
                                            {!! $superiority->description !!}
                                        </div>
                                    </div>
                                @endforeach
                                <!--Counter One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sliding Text One End --> <!-- Services One Start -->
    <section class="services-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Layanan Terbaru</span>
                </div>
                <h2 class="section-title__title">Solusi Atap <span>Berkualitas</span> <br>Setiap Saat</h2>
            </div>
            <div class="services-one__carousel owl-theme owl-carousel">
                <!--Services One Single Start-->
                @foreach ($services as $service)
                    <div class="item">
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
                                <h3 class="services-one__title"><a
                                        href="{{ route('detail_service', $service->id) }}">{{ $service->title }}</a>
                                </h3>
                                <p class="services-one__text">{{ $service->overview }}</p>
                                <div class="services-one__btn-box">
                                    <a href="{{ route('detail_service', $service->id) }}"
                                        class="services-one__btn thm-btn">Baca Selengkapnya<span
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
    <!-- Services One End -->
    <!-- Testimonial One Start -->
    <section class="testimonial-one">
        <div class="testimonial-one__wrap">
            <div class="testimonial-one__shape-1">
                <img src="assetsfront/images/shapes/testimonial-one-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="section-title text-left">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">
                            Kesaksian klien</span>
                    </div>
                    <h2 class="section-title__title">Melindungi Anda dengan Kekuatan</h2>
                </div>
                <div class="testimonial-one__carousel owl-theme owl-carousel">
                    <!--Testimonial One Single Start-->
                    @foreach ($testimonials as $testimonial)
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__quote">
                                    <span class="icon-quote"></span>
                                </div>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset($testimonial->path) }}" alt="{{ $testimonial->name }}">
                                    </div>
                                    <div class="testimonial-one__client-content">
                                        <h3><a href="">{{ $testimonial->name }}</a></h3>
                                        <p>{{ $testimonial->position }}</p>
                                    </div>
                                </div>
                                <p class="testimonial-one__text">{!! $testimonial->description !!}
                                </p>
                                <div class="testimonial-one__ratting">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--Testimonial One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial One End --> <!-- Project One Start -->
    <section class="project-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Galeri Terbaru</span>
                </div>
                <h2 class="section-title__title">Solusi Atap <span>Berkualitas</span> <br>Setiap Saat</h2>
            </div>
            <div class="row">
                <!-- Project One Single Start -->
                <div class="swiper-container init-swiper">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($gallerys as $gallery)
                            <div class="swiper-slide">
                                <img src="{{ asset($gallery->path) }}" class="img-fluid custom-img"
                                    alt="Gambar Galeri Canopy" style="width: 100%; height: auto;">
                            </div>
                        @endforeach
                    </div>

                    <!-- Swiper Pagination -->
                    <div class="swiper-pagination"></div>

                </div>
            </div>
            <!-- Swiper CSS -->
            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

            <!-- Swiper JS -->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <script>
                var swiper = new Swiper('.init-swiper', {
                    loop: true,
                    speed: 600,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false
                    },
                    slidesPerView: 1, // Hanya menampilkan 1 gambar per slide (untuk gambar lebih besar)
                    spaceBetween: 0, // Mengurangi jarak antar gambar
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                        clickable: true
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 1, // Untuk ukuran layar kecil menampilkan 1 gambar
                            spaceBetween: 10
                        },
                        480: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        640: {
                            slidesPerView: 3,
                            spaceBetween: 30
                        },
                        992: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        }
                    }
                });
            </script>


        </div>
        </div>
    </section>
    <!-- Project One End -->

    <!--Blog One Start-->
    <section class="blog-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Blog</span>
                </div>
                <h2 class="section-title__title">Solusi Atap <span>Berkualitas</span> <br>Setiap Saat</h2>
            </div>
            <div class="row">
                <!--Blog One Single Start-->
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ asset($blog->path) }}" alt="{{ $blog->title }}" width="100px" height="200px" style=" object-fit: cover;">
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-detail', $blog->id) }}"><span class="icon-user"></span>By
                                            admin</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-detail', $blog->id) }}"><span
                                                class="icon-callender"></span>{{ $blog->created_at }}</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a
                                        href="{{ route('blog-detail', $blog->id) }}">{{ $blog->title }}</a></h3>
                                <div class="blog-one__btn-box">
                                    <a href="{{ route('blog-detail', $blog->id) }}"
                                        class="blog-one__btn thm-btn-two">Baca Selengkapnya<span
                                            class="icon-dubble-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--Blog One Single End-->
            </div>
        </div>
    </section>
    <!--Blog One End-->
@endsection
