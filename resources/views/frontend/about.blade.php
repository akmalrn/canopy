@extends('frontend.layouts')
@section('title', 'Tentang Kami')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assetsfront/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Beranda</a></li>
                    <li><span>/</span></li>
                    <li>Tentang</li>
                </ul>
                <h2>Tentang Kami</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Feature Three Start-->
    <section class="feature-four">
        <div class="container">
            <div class="row">
                <!--Feature Three Single Start-->
                @foreach ($promo as $promo)
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-four__single">
                        <div class="feature-four__img-box">
                            <div class="feature-four__img">
                                <img src="{{ asset($promo->path) }}" alt="{{ $promo->title }}">
                            </div>
                        </div>
                        <div class="feature-four__content">
                            <h3 class="feature-four__title"><a href="https://wa.me/{{ $contact->phone_number }}?text=Halo+saya+ingin+mendapatkan+promo{{ $promo->title }}">{{ $promo->title }}</a></h3>
                            <a href="https://wa.me/{{ $contact->phone_number }}?text=Halo+saya+ingin+mendapatkan+promo{{ $promo->title }}"><p class="feature-four__text">Dapatkan Promo</p></a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Feature Three Single End-->
            </div>
        </div>
    </section>
    <!--Feature Three End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one testimonial-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="testimonial-one__left">
                        @foreach ($testimonials as $testimonial)
                            <div class="testimonial-one__img-1 testimonial-one__img-{{ $testimonial->id }}">
                                <img src="{{ asset($testimonial->path) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="testimonial-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Testimonial kami</span>
                            <h2 class="section-title__title">Apa yang mereka katakan?</h2>
                        </div>
                        <div class="testimonial-one__carousel thm-owl__carousel owl-theme owl-carousel"
                            data-owl-options='{
                        "items": 1,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":false,
                        "dots":true,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "768":{
                                "items":1
                            },
                            "992":{
                                "items": 1
                            }
                        }
                    }'>
                            <!--Testimonial One Single Start-->
                            @foreach ($testimonials as $testimonial)
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <p class="testimonial-one__text">{!! $testimonial->description !!}</p>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">{{ $testimonial->name }}</h3>
                                            <p class="testimonial-one__client-title">{{ $testimonial->position }}</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quotes"></span>
                                        </div>
                                        <div class="testimonial-one__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!--Testimonial One Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

    <!--Value Two Start-->
    <section class="value-two">
        <div class="value-two__wrap">
            <div class="value-two__left">
                <div class="value-two__bg" style="background-image: url({{ asset($feature->path ?? '') }});">
                </div>
            </div>
            <div class="value-two__right">
                <div class="value-two__shape-1 float-bob-x">
                    <img src="assetsfront/images/shapes/value-two-shape-1.png" alt="">
                </div>
                <div class="value-two__right-content">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">fitur apartemen</span>
                        <h2 class="section-title__title">{{ $feature->title ?? '' }}</h2>
                    </div>
                    <p class="value-two__text">{{ $featurre->overview ?? '' }}</p>
                    <div class="value-two__points-box">
                        <ul class="list-unstyled value-two__points">
                          {!! $feature->description ?? '' !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Value Two End-->

    <!--Team Two Start-->
    <section class="team-two">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">
                    bertemu tim</span>
                <h2 class="section-title__title">Agen ahli kami</h2>
            </div>
            <div class="row">
                <!--Team Two Single Start-->
                @foreach ($teams as $team)
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-two__single">
                        <div class="team-two__img-box">
                            <div class="team-two__img">
                                <img src="{{ asset($team->path) }}" alt="">
                            </div>
                            <div class="team-two__hover">
                                <h3 class="team-two__hover-name"><a href="agents.html">{{ $team->name }}</a></h3>
                                <p class="team-two__hover-sub-title">{{ $team->position }}</p>
                                <div class="team-two__social">
                                    @if ($team->twitter)
                                    <a href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a>
                                @endif

                                @if ($team->facebook)
                                    <a href="{{ $team->facebook }}"><i class="fab fa-facebook"></i></a>
                                @endif

                                @if ($team->dribbble)
                                    <a href="{{ $team->dribbble }}"><i class="fab fa-dribbble"></i></a>
                                @endif

                                @if ($team->linkedin)
                                    <a href="{{ $team->linkedin }}"><i class="fab fa-linkedin"></i></a>
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="team-two__content">
                            <h3 class="team-two__name"><a href="agents.html">{{ $team->name }}</a></h3>
                            <p class="team-two__sub-title">{{ $team->position }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Team Two Single End-->
            </div>
        </div>
    </section>
    <!--Team Two End-->

    <!--Brand Two Start-->
    <section class="brand-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-two__inner">
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
    <!--Brand Two End-->
@endsection
