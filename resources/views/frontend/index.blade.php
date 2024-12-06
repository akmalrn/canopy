@extends('frontend.layouts')
@section('content')
    <!--Main Slider Start-->
    <section class="main-slider clearfix">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 5000
            }}'>

            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url({{ asset($slider->path) }});"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">{{ $slider->title }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>



            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--About One Start-->
    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-one__big-text">Apartments</div>
                        <div class="about-one__img-box">
                            <div class="about-one__img-one">
                                <img src="{{ asset($configuration->path_building ?? '') }}" alt="" height="800px"
                                    style="width:550px ; max-width: 550px">
                            </div>
                            <div class="about-one__img-two">
                                <img src="{{ asset($configuration->path_building_2 ?? '') }}" alt="" width="419px"
                                    height="353">
                            </div>
                            <div class="about-one__shape-1 float-bob-y"></div>
                            <div class="about-one__shape-2">
                                <img src="assetsfront/images/shapes/about-one-shape-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">gambaran umum bangunan</span>
                            <h2 class="section-title__title">{{ $configuration->title_building ?? '' }}</h2>
                        </div>
                        <p class="about-one__text">{{ $configuration->overview_building ?? '' }}</p>
                        <ul class="list-unstyled about-one__points">
                            {!! $configuration->description ?? '' !!}
                        </ul>
                        <a href="{{ route('about') }}" class="thm-btn about-one__btn">Lebih Detil</a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <!--Counter One Start-->
    <section class="counter-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="counter-one__inner">
                        <ul class="list-unstyled counter-one__list">
                            <li class="counter-one__single wow fadeInLeft" data-wow-delay="100ms">
                                <div class="counter-one__icon">
                                    <span class="icon-size"></span>
                                </div>
                                <div class="counter-one__content-box count-box">
                                    <h3 class="count-text" data-stop="{{ $configuration->areas_building ?? '' }}"
                                        data-speed="1500">00</h3>
                                    <p class="counter-one__text">Area Bangunan</p>
                                </div>
                            </li>
                            <li class="counter-one__single wow fadeInLeft" data-wow-delay="200ms">
                                <div class="counter-one__icon">
                                    <span class="icon-parking"></span>
                                </div>
                                <div class="counter-one__content-box count-box">
                                    <h3 class="count-text" data-stop="{{ $configuration->parkings_building ?? '' }}"
                                        data-speed="1500">00</h3>
                                    <p class="counter-one__text">Parkir Mobil</p>
                                </div>
                            </li>
                            <li class="counter-one__single wow fadeInLeft" data-wow-delay="300ms">
                                <div class="counter-one__icon">
                                    <span class="icon-apartments"></span>
                                </div>
                                <div class="counter-one__content-box count-box">
                                    <h3 class="count-text" data-stop="{{ $configuration->units_building ?? '' }}"
                                        data-speed="1500">00</h3>
                                    <p class="counter-one__text">Tipe Unit</p>
                                </div>
                            </li>
                            <li class="counter-one__single wow fadeInLeft" data-wow-delay="400ms">
                                <div class="counter-one__icon">
                                    <span class="icon-hotel-bed"></span>
                                </div>
                                <div class="counter-one__content-box count-box">
                                    <h3 class="count-text" data-stop="{{ $configuration->bedrooms_building ?? '' }}"
                                        data-speed="1500">00</h3>
                                    <p class="counter-one__text">Kamar Tidur</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counter One End-->

    <!--Feature One Start-->
    <section class="feature-one">
        <div class="feature-one__bg-box">
            <div class="feature-one__bg" style="background-image: url(assetsfront/images/backgrounds/feature-one-bg.jpg);">
            </div>
        </div>
        <div class="feature-one__shape-1 float-bob-x">
            <img src="assetsfront/images/shapes/feature-one-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="feature-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Fitur utama</span>
                            <h2 class="section-title__title">
                                Fitur properti utama kami</h2>
                        </div>
                        <p class="feature-one__text">Pengalaman Tak Tertandingi Nikmati pengalaman yang luar biasa dengan
                            layanan terbaik yang kami tawarkan, dirancang khusus untuk memenuhi kebutuhan Anda dengan
                            kualitas yang tak tertandingi.</p>
                        <div class="feature-one__video-link">
                            <a href="{{ $configuration->youtube_superiority ?? '' }}" class="video-popup">
                                <div class="feature-one__video-icon">
                                    <span class="fa fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                        <div class="feature-one__counter-box">
                            <ul class="feature-one__counter-list list-unstyled">
                                <li>
                                    <div class="feature-one__counter-content-box">
                                        <div class="feature-one__counter-count-box count-box">
                                            <h3 class="count-text" data-stop="{{ $configuration->units_building ?? '' }}"
                                                data-speed="1500">00</h3>
                                            <span class="feature-one__counter-plus">+</span>
                                        </div>
                                        <p class="feature-one__counter-text">Total Tipe Unit</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature-one__counter-content-box">
                                        <div class="feature-one__counter-count-box count-box">
                                            <h3 class="count-text"
                                                data-stop="{{ $configuration->features_building ?? '' }}"
                                                data-speed="1500">00</h3>
                                            <span class="feature-one__counter-plus">+</span>
                                        </div>
                                        <p class="feature-one__counter-text">Kualitas Fitur</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="feature-one__right">
                        <div class="row">
                            <!--Feature One Single Start-->
                            @foreach ($superioritys as $superiority)
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                    <div class="feature-one__single">
                                        <div class="feature-one__single-inner">
                                            <div class="feature-one__icon">
                                                {!! $superiority->icon !!}
                                            </div>
                                            <h3 class="feature-one__title"><a
                                                    href="https://wa.me/{{ $contact->phone_number ?? '' }}?text={{ urlencode('Permisi Admin, Saya Ingin Keunggulan ' . $superiority->title) }}">{{ $superiority->title }}</a>
                                            </h3>
                                            <p class="feature-one__text">{!! $superiority->description !!}</p>
                                            <div class="feature-one__btn">
                                                <a href="https://wa.me/{{ $contact->phone_number ?? '' }}?text={{ urlencode('Permisi Admin, Saya Ingin Keunggulan' . $superiority->title) }}"
                                                    target="_blank" rel="noopener noreferrer">
                                                    <i class="fa fa-arrow-right"></i> Hubungi
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!--Feature One Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature One End-->

    <!--Apartments One Start-->
    <section class="apartments-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Kompleks</span>
                <h2 class="section-title__title">Pilih Tipe Kamu</h2>
            </div>
            <div class="row">
                <!--Apartments One Single Start-->
                @foreach($categoryservices as $category)
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="apartments-one__single">
                        <div class="apartments-one__img">
                            <img src="{{ asset($category->path) }}" alt="" height="247px" width="377px">
                            <div class="apartments-one__title-box">
                                <h3 class="apartments-one__title"><a href="{{ route('detail_service', ['category_id' => $category->id]) }}"">{{ $category->category }}</a></h3>
                            </div>
                            <div class="apartments-one__hover">
                                <h3 class="apartments-one__hover-title"><a href="{{ route('detail_service', ['category_id' => $category->id]) }}"">{{ $category->category }}</a></h3>
                                <div class="apartments-one__arrow">
                                    <a href="{{ route('detail_service', ['category_id' => $category->id]) }}""><span class="icon-right-arrow"></span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Apartments One Single End-->
            </div>
        </div>
    </section>
    <!--Apartments One End-->

    <!--Neighborhoods Start-->
    <section class="neighborhoods">
        <div class="neighborhoods-bg" style="background-image: url(assetsfront/images/backgrounds/neighborhoods-bg.jpg);">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Area di sekitar</span>
                <h2 class="section-title__title">Lingkungan</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="neighborhoods__left">
                        <div class="neighborhoods__faq">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>{{ $contact->address ?? '' }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="neighborhoods__right">
                        <div class="neighborhoods__img-box">
                            <div class="">
                                <iframe src="{{ $contact->map ?? '' }}" width="100%" height="450" style="border:0;"
                                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Neighborhoods End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-one__inner">
                        <div class="thm-swiper__slider swiper-container"
                            data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 6
                    }
                }}'>
                            <div class="swiper-wrapper">
                                @foreach ($mitras as $mitra)
                                    <div class="swiper-slide">
                                        <img src="{{ $mitra->path ?? '' }}" alt="{{ $mitra->title ?? '' }}"
                                            width="107px" height="110px">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

    <!--Contact One Start-->
    <section class="contact-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Kontak Sekarang</span>
                            <h2 class="section-title__title">Hubungi kami</h2>
                        </div>
                        <div class="contact-one__person">
                            <div class="contact-one__person-img">
                                <img src="{{ asset($contact->path ?? '') }}" alt="{{ $contact->name ?? '' }}">
                            </div>
                            <div class="contact-one__person-content">
                                <h3 class="contact-one__person-name">{{ $contact->name ?? '' }}</h3>
                                <p class="contact-one__person-sub-title">{{ $contact->position ?? '' }}</p>
                            </div>
                        </div>
                        <p class="contact-one__text-1">Hubungi Kami Untuk Mendapatkan Layanan Dari Kami...</p>
                        <ul class="list-unstyled contact-one__list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <p>Ada Pertannyaan?</p>
                                    <h4> <span>Gratis</span> <a href="https://wa.me/{{ $contact->phone_number ?? '' }}"
                                            target="blank">+{{ $contact->phone_number ?? '' }}</a></h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <p>Tulis Email</p>
                                    <h4><a
                                            href="mailto:{{ $contact->email_address ?? '' }}">{{ $contact->email_address ?? '' }}</a>
                                    </h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-one__right">
                        <div class="row">
                            <div class="contact-one__form-box">
                                <form action="{{ route('message.store') }}" method="POST"
                                    class="contact-one__form contact-one-validated" novalidate="novalidate" id="myForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-one__input-box">
                                                <input type="text" placeholder="Your name" name="name"
                                                    id="name" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-one__input-box">
                                                <input type="email" placeholder="Email address" name="email"
                                                    id="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-one__input-box">
                                                <input type="text" placeholder="Nomor Telephone" name="phone_number"
                                                    id="phone_number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="contact-one__input-box text-message-box">
                                                <textarea name="description" placeholder="Write message" id="description" required></textarea>
                                            </div>
                                            <div class="g-recaptcha"
                                                data-sitekey="6LcgYFMqAAAAAKEdfhBqFFdRxLk9_07L-Vea_hMd"></div>
                                            <br>
                                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                            <script>
                                                document.getElementById('myForm').addEventListener('submit', function(event) {
                                                    var recaptchaResponse = grecaptcha.getResponse();
                                                    if (recaptchaResponse.length === 0) {
                                                        event.preventDefault(); // Mencegah pengiriman form
                                                        alert('Silakan verifikasi bahwa Anda bukan robot.'); // Notifikasi untuk pengguna
                                                    }
                                                });
                                            </script>
                                            <div class="contact-one__btn-box">
                                                <button type="submit" class="thm-btn contact-one__btn">Kirim
                                                    Pesan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact One End-->

    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">   apa yang terjadi</span>
                <h2 class="section-title__title">Berita terbaru </h2>
            </div>
            <div class="row">
                <!--News One Single Start-->
                @foreach ($blogs as $blog)
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{ asset($blog->path) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="news-one__content-box">
                            <div class="news-one__date">
                                <p>{{ $blog->created_at }}</p>
                            </div>
                            <div class="news-one__content">
                                <p class="news-one__author">Admin</p>
                                <h3 class="news-one__title"><a href="{{ route('blog-detail', $blog->id) }}">{{ $blog->title }}</a></h3>
                            </div>
                            <div class="news-one__bottom">
                                <a href="{{ route('blog-detail', $blog->id) }}" class="news-one__more"> <i class="fa fa-arrow-right"></i>
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--News One Single End-->
            </div>
        </div>
    </section>
    <!--News One End-->

    <!--Gallery One Start-->
    <section class="gallery-one">
        <div class="gallery-one__container">
            <div class="gallery-one__carousel thm-owl__carousel owl-theme owl-carousel"
                data-owl-options='{
                "items": 5,
                "margin": 0,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": 6000,
                "nav":false,
                "dots":false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "responsive":{
                    "0":{
                        "items":1
                    },
                    "768":{
                        "items":3
                    },
                    "992":{
                        "items": 4
                    },
                    "1200":{
                        "items": 5
                    }
                }
            }'>
                <!--Gallery One Single Start-->
                @foreach ($gallerys as $gallery)
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="{{ asset($gallery->path) }}" alt="">
                                <div class="gallery-one__icon">
                                    <a class="img-popup" href="{{ asset($gallery->path) }}"><span
                                            class="fa fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--Gallery One Single End-->
            </div>
        </div>
    </section>
    <!--Gallery One End-->
@endsection
