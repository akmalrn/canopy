@extends('frontend.layouts')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Contact Us</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span class="icon-angle-left"></span></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Google Map Start-->
    <section class="google-map-one">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="google-map__one" allowfullscreen></iframe>

    </section>
    <!--Google Map End-->

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="contact-page__inner">
                <p class="contact-page__sub-title">Contact Us</p>
                <h3 class="contact-page__title">Get In Touch</h3>
                <form class="contact-form-validated contact-page__form" action="assets/inc/sendemail.php"
                    method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <input type="text" name="name" placeholder="Your Name" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <input type="email" name="email" placeholder="Your Email" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <input type="text" name="Phone" placeholder="Your Number" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="contact-page__input-box">
                                <div class="select-box">
                                    <select class="selectmenu wide">
                                        <option selected="selected">Choose a Option</option>
                                        <option>Type Of Service 01</option>
                                        <option>Type Of Service 02</option>
                                        <option>Type Of Service 03</option>
                                        <option>Type Of Service 04</option>
                                        <option>Type Of Service 05</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-page__input-box text-message-box">
                                <textarea name="message" placeholder="Message here.."></textarea>
                            </div>
                            <div class="contact-page__btn-box">
                                <button type="submit" class="thm-btn-two contact-page__btn">Appointment
                                    Now<span class="icon-dubble-arrow-right"></span></button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="result"></div>
            </div>
        </div>
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
                                <p><a href="tel:0123456789101">012 345 678 9101</a></p>
                                <p><a href="tel:2085550112">(208) 555-0112</a></p>
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
                                <p><a href="mailto:sarazbhuiyan0214@gmail.com">sarazbhuiyan0214@gmail.com</a></p>
                                <p><a href="mailto:saiyam@gmail.com">saiyam@gmail.com</a></p>
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
                                <h3>Location</h3>
                                <p>Mirpur 10 road Apon Bhobon<br> Dhaka,Bangladesh</p>
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
