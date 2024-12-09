@extends('frontend.layouts')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.png);">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Kontak Kami</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Beranda</a></li>
                        <li><span class="icon-angle-left"></span></li>
                        <li>Kontak Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Google Map Start-->
    <section class="google-map-one">
        <iframe
            src="{{ $contact->map ?? '' }}"
            class="google-map__one" allowfullscreen></iframe>

    </section>
    <!--Google Map End-->

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="contact-page__contact-list">
                <div class="row">
                    <!--Contact Page Contact List Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-page__contact-list-single">
                            <div class="contact-page__contact-list-icon">
                                <span class="icon-call"></span>
                            </div>
                            <div class="contact-page__contact-list-content">
                                <h3>Phone</h3>
                                <p><a href="https://wa.me/{{ $contact->phone_number ?? '' }}" target="blank">+{{ $contact->phone_number ?? '' }}</a></p>
                                <p><a href="https://wa.me/{{ $contact->phone_number_2 ?? '' }}" target="blank">+{{ $contact->phone_number_2 ?? '' }}</a></p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Page Contact List Single End-->
                    <!--Contact Page Contact List Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-page__contact-list-single">
                            <div class="contact-page__contact-list-icon">
                                <span class="icon-envelope"></span>
                            </div>
                            <div class="contact-page__contact-list-content">
                                <h3>Email</h3>
                                <p><a href="mailto:{{ $contact->email_address ?? '' }}" target="blank">{{ $contact->email_address ?? '' }}</a></p>
                                <p><a href="mailto:{{ $contact->email_address_2 ?? '' }}" target="blank">{{ $contact->email_address_2 ?? '' }}</a></p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Page Contact List Single End-->
                    <!--Contact Page Contact List Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-page__contact-list-single">
                            <div class="contact-page__contact-list-icon">
                                <span class="icon-location"></span>
                            </div>
                            <div class="contact-page__contact-list-content">
                                <h3>Alamat</h3>
                                <p>{{ $contact->address ?? '' }}h</p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Page Contact List Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->
@endsection
