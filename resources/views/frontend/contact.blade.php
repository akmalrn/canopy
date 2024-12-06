@extends('frontend.layouts')
@section('title', 'Kontak Kami')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assetsfront/images/backgrounds/page-header-bg-contact.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Beranda</a></li>
                    <li><span>/</span></li>
                    <li>Kontak</li>
                </ul>
                <h2>Kontak Kami</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact Two Start-->
    <section class="contact-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-two__left">
                        <div class="contact-two__img">
                            <img src="{{ asset($contact->path_contact ?? '') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-two__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">kontak dengan kami</span>
                            <h2 class="section-title__title">Hubungi sekarang</h2>
                        </div>
                        <ul class="list-unstyled contact-two__list">
                            <li>
                                <div class="icon">
                                    <i class="icon-telephone"></i>
                                </div>
                                <div class="content">
                                    <p>Ada pertanyaan?</p>
                                    <h4><a href="https://wa.me/{{ $contact->phone_number ?? '' }}?text=Permisi+Admin"
                                            target="blank">+{{ $contact->phone_number ?? '' }}</a></h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-email"></i>
                                </div>
                                <div class="content">
                                    <p>Tulis email</p>
                                    <h4><a
                                            href="mailto:{{ $contact->email_address ?? '' }}">{{ $contact->email_address ?? '' }}</a>
                                    </h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-pin"></i>
                                </div>
                                <div class="content">
                                    <p>Kunjungi Kapan Saja</p>
                                    <h4>{{ $contact->address ?? '' }}</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Two End-->

    <!--Google Map Start-->
    <section class="contact-page-google-map">
        <iframe src="{{ $contact->map ?? '' }}" class="google-map__two" allowfullscreen></iframe>

    </section>
    <!--Google Map End-->

    <!--Contact Three Start-->
    <section class="contact-three">
        <div class="container">
            <div class="contact-three__inner" style="background-color:var(--aports-primary);">
                <div class="section-title text-center">
                    <span class="section-title__tagline">menulis pesan</span>
                    <h2 class="section-title__title">Jangan ragu untuk menulis</h2>
                </div>
                <div class="contact-three__form-box">
                    <form action="{{ route('message.store') }}" method="POST"
                        class="contact-one__form contact-one-validated" novalidate="novalidate" id="myForm">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-one__input-box">
                                    <input type="text" placeholder="Your name" name="name" id="name" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-one__input-box">
                                    <input type="email" placeholder="Email address" name="email" id="email"
                                        required>
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
                                <div class="g-recaptcha" data-sitekey="6LcgYFMqAAAAAKEdfhBqFFdRxLk9_07L-Vea_hMd"></div>
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
    </section>
    <!--Contact Three End-->

    <!--Brand Three Start-->
    <section class="brand-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-three__inner">
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
                                    <img src="{{ asset($mitra->path) }}" alt="{{ $mitra->title }}" width="107px" height="110px">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand Three End-->
@endsection
