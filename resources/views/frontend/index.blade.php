@extends('frontend.layouts')
@section('title', $configuration->title)
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
                    {{-- <div class="main-slider__img">
                    <img src="assetsfront/images/resources/main-slider-img-1-1.png" alt="">
                </div> --}}
                    <div class="container">
                        <div class="main-slider__content">
                            <div class="main-slider__content-shape-1">
                                <img src="assetsfront/images/shapes/main-slider-content-shape-1.png" alt="">
                            </div>
                            <h2 class="main-slider__title">{{ $slider->title }}</h2>
                            <ul class="list-unstyled main-slider__counter">
                                <li>
                                    <div class="main-slider__counter-single">
                                        <div class="main-slider__count count-box">
                                            <h3 class="count-text" data-stop="{{ $serviceTotal }}" data-speed="1500">00</h3>
                                        </div>
                                        <p class="main-slider__count-text">Layanan</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="main-slider__counter-single">
                                        <div class="main-slider__count count-box">
                                            <h3 class="count-text" data-stop="{{ $blogTotal }}" data-speed="1500">00</h3>
                                        </div>
                                        <p class="main-slider__count-text">Blog</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-slider__btn-and-call-box">
                                <div class="main-slider__btn-box">
                                    <a href="{{ route('services') }}" class="thm-btn-two main-slider__btn">Dapatkan
                                        Layanan<span class="icon-dubble-arrow-right"></span></a>
                                </div>
                                <div class="main-slider__call">
                                    <div class="main-slider__call-icon">
                                        <span class="icon-call"></span>
                                    </div>
                                    <div class="main-slider__call-number">
                                        <p>Butuh Bantuan?</p>
                                        <h5><a href="https://wa.me/{{ $contact->phone_number ?? '' }}?text=Permisi+Admin"
                                                target="blank">+{{ $contact->phone_number ?? '' }}</a></h5>
                                    </div>
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
                                    <div class="about-one__count count-box">
                                        <h3 class="count-text" data-stop="2000" data-speed="1500">00</h3>
                                    </div>
                                    <p class="about-one__count-text">Happy Clients</p>
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
                                    <img src="{{ asset($service->path) }}" alt="{{ $service->title }}">
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
    <!-- Contact One Start -->
    <section class="contact-one">
        <div class="contact-one__wrap">
            <div class="contact-one__shape-1">
                <img src="assetsfront/images/shapes/contact-one-shape-1.png" alt="">
            </div>
            <div class="contact-one__shape-3">
                <img src="assetsfront/images/shapes/contact-one-shape-3.png" alt="">
            </div>
            <div class="contact-one__shape-4">
                <img src="assetsfront/images/shapes/contact-one-shape-4.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Hubungi Kami</span>
                                </div>
                                <h2 class="section-title__title">Atap Pelindung Puncak Percayakan pada para ahli</h2>
                            </div>
                            <form class="contact-form-validated contact-one__form" action="{{ route('message.store') }}" id="myForm" method="POST">
                                @csrf
                                <div class="row">
                                    <!-- Nama -->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" name="name" id="name" placeholder="Nama Kamu" required maxlength="255" autocomplete="name">
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-one__input-box">
                                            <input type="email" name="email" id="email" placeholder="Email Kamu" required >
                                        </div>
                                    </div>

                                    <!-- Telepon -->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-one__input-box">
                                            <input type="text" name="phone_number" id="phone_number" placeholder="Telepon Kamu" required maxlength="20" pattern="\d+">
                                        </div>
                                    </div>

                                    <!-- Pesan -->
                                    <div class="col-xl-12">
                                        <div class="contact-one__input-box text-message-box">
                                            <textarea name="description" id="description" placeholder="Pesan Disini.." required minlength="10"></textarea>
                                        </div>

                                        <!-- reCAPTCHA -->
                                        <div class="g-recaptcha" data-sitekey="6LcgYFMqAAAAAKEdfhBqFFdRxLk9_07L-Vea_hMd"></div>
                                        <br>

                                        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                        <script>
                                            document.getElementById('myForm').addEventListener('submit', function(event) {
                                                var recaptchaResponse = grecaptcha.getResponse();
                                                if (recaptchaResponse.length === 0) {
                                                    event.preventDefault();
                                                    alert('Silakan verifikasi bahwa Anda bukan robot.');
                                                }
                                            });
                                        </script>

                                        <!-- Tombol Submit -->
                                        <div class="contact-one__btn-box">
                                            <button type="submit" class="thm-btn-two contact-one__btn">
                                                Jadwalkan Sekarang<span class="icon-dubble-arrow-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="result"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-one__right">
                            <div class="contact-one__img wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <img src="assetsfront/images/resources/contact-one-img-1.png" alt="">
                                <div class="contact-one__shape-2">
                                    <img src="assetsfront/images/shapes/contact-one-shape-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact One End -->
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
                    <div class="item">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__quote">
                                <span class="icon-quote"></span>
                            </div>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="assetsfront/images/testimonial/testimonial-1-1.jpg" alt="">
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h3><a href="testimonials.php">Cameron Williamson</a></h3>
                                    <p>Pro Roofing Experts</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Construction is an essential industry that invo
                                building and designing structures such as buildings, roa bridges and more. It
                                requires skilled workers, materials and the careful planning to ensure successful
                            </p>
                            <div class="testimonial-one__ratting">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star last-icon"></span>
                                <span class="icon-star last-icon"></span>
                            </div>
                        </div>
                    </div>
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
                    <span class="section-title__tagline">latest gallery</span>
                </div>
                <h2 class="section-title__title">Quality roofing <span>solutions</span> <br>every time</h2>
            </div>
            <div class="row">
                <!--Project One Single Start-->
                <div class="col-xl-6 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="100ms">
                    <div class="project-one__single">
                        <div class="project-one__img-box">
                            <div class="project-one__img">
                                <img src="assetsfront/images/project/project-1-1.jpg" alt="">
                            </div>
                            <div class="project-one__content">
                                <p class="project-one__sub-title">Roof Renewal</p>
                                <h4 class="project-one__title"><a href="project-details.php">Expert roof
                                        expectations</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project One Single End-->
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="row">
                        <!--Project One Single Start-->
                        <div class="col-xl-12 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="200ms">
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assetsfront/images/project/project-1-2.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <p class="project-one__sub-title">Roof Renewal</p>
                                        <h4 class="project-one__title"><a href="project-details.php">Expert Roof
                                                Layers</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                        <!--Project One Single Start-->
                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assetsfront/images/project/project-1-3.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <p class="project-one__sub-title">Roof Renewal</p>
                                        <h4 class="project-one__title"><a href="project-details.php">Expert Roof
                                                Renovation</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                        <!--Project One Single Start-->
                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assetsfront/images/project/project-1-4.jpg" alt="">
                                    </div>
                                    <div class="project-one__content">
                                        <p class="project-one__sub-title">Roof Renewal</p>
                                        <h4 class="project-one__title"><a href="project-details.php">Expert Roof
                                                Installation</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project One Single End-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project One End -->

    <!--Blog One Start-->
    <section class="blog-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">blog & News</span>
                </div>
                <h2 class="section-title__title">Quality roofing <span>solutions</span> <br>every time</h2>
            </div>
            <div class="row">
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="assetsfront/images/blog/blog-1-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="#"><span class="icon-user"></span>By admin</a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-callender"></span>23 December 2023</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="blog-details.php">Trust the experts for all
                                    your
                                    roof service needs</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.php" class="blog-one__btn thm-btn-two">Read more<span
                                        class="icon-dubble-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="assetsfront/images/blog/blog-1-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="#"><span class="icon-user"></span>By admin</a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-callender"></span>23 December 2023</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="blog-details.php">Enhance the beau
                                    functionality
                                    of your our service</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.php" class="blog-one__btn thm-btn-two">Read more<span
                                        class="icon-dubble-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="assetsfront/images/blog/blog-1-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="#"><span class="icon-user"></span>By admin</a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-callender"></span>23 December 2023</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="blog-details.php">Functionality of your roof
                                    with
                                    our service</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.php" class="blog-one__btn thm-btn-two">Read more<span
                                        class="icon-dubble-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
            </div>
        </div>
    </section>
    <!--Blog One End-->
@endsection
