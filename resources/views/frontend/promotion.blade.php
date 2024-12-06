@extends('frontend.layouts')
@section('title', 'Promo')
@section('content')
       <!--Page Header Start-->
       <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assetsfront/images/backgrounds/type.jpeg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ Route('index') }}">Beranda</a></li>
                    <li><span>/</span></li>
                    <li>Promo</li>
                </ul>
                <h2>Promo</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Apartments Page Start-->
    <section class="apartments-page">
        <div class="container">
            <div class="row">
                <!--Apartments Two Single Start-->
                @foreach ($promo as $promo)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="apartments-two__single">
                        <div class="apartments-two__img">
                            <a href="https://wa.me/{{ $contact->phone_number }}?text=Halo+saya+ingin+mendapatkan+promo{{ $promo->title }}" target="blank"><img src="{{ asset($promo->path) }}" alt="{{ $promo->title }}"></a>
                        </div>
                        <div class="apartments-two__content">
                            <div class="apartments-two__content-left">
                                <h3 class="apartments-two__title"><a href="https://wa.me/{{ $contact->phone_number }}?text=Halo+saya+ingin+mendapatkan+promo{{ $promo->title }}" target="blank">{{ $promo->title }}</a></h3>
                                <p class="apartments-two__tagline"><a href="https://wa.me/{{ $contact->phone_number }}?text=Halo+saya+ingin+mendapatkan+promo{{ $promo->title }}" target="blank">Dapatkan Promo</a></p>
                            </div>
                            <div class="apartments-two__content-right">
                                <a href="https://wa.me/{{ $contact->phone_number }}?text=Halo+saya+ingin+mendapatkan+promo{{ $promo->title }}" target="blank" class="apartments-two__btn thm-btn">{{ $promo->overview }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Apartments Two Single End-->
            </div>
        </div>
    </section>
    <!--Apartments Page End-->
@endsection
