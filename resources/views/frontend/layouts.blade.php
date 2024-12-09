<!-- Header Here -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assetsfront/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset($configuration->path_logo ?? 'default-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset($configuration->path_logo ?? 'default-icon.png') }}" />
    <link rel="shortcut icon" href="{{ $configuration->path_logo }}" type="image/x-icon">
    <link rel="manifest" href="assetsfront/images/favicons/site.webmanifest" />
    <meta name="description" content="{{ $blog->descriptions ?? $configuration->meta_descriptions ?? '' }}" />
    <meta name="keywords" content="{{ $blog->keywords ?? $configuration->meta_keywords ?? '' }}" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">


        <link rel="stylesheet" href="{{ asset('assetsfront/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/custom-animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/font-awesome-all.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/jarallax.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/jquery.magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/odometer.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsfront/css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/owl.theme.default.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/nice-select.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/jquery-ui.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/slider.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/footer.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/about.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/sliding-text.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/services.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/counter.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/cta.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/team.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/contact.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/we-serve.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/testimonial.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/project.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/brand.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/faq.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/blog.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/why-we-are.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/video.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/work-process.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/quality-work.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/page-header.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/google-map.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/error.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/module-css/coming-soon.css') }}" />
        <!-- template styles -->
        <link rel="stylesheet" href="{{ asset('assetsfront/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assetsfront/css/responsive.css') }}" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <!-- /.preloader --> <!-- Start sidebar widget content -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="{{ route('index') }}"><img src="{{ asset($configuration->path) }}"
                                        alt="{{ $configuration->website_name }}" /></a>
                            </div>
                            <div class="content-box">
                                <h4>About Us</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                    labore et magna aliqua.</p>
                            </div>
                            <div class="form-inner">
                                <h4>Get a free quote</h4>
                                <form action="assetsfront/inc/sendemail.php" class="contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message..."></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="thm-btn form-inner__btn">Submit Now</button>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar widget content -->
    <div class="page-wrapper">
        <header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="container">
                        <div class="main-menu__wrapper-inner">
                            <div class="main-menu__left">
                                <div class="main-menu__logo">
                                    <a href="{{ route('index') }}"><img src="{{ asset($configuration->path) }}" width="100px" height="auto"
                                            alt="{{ $configuration->website_name }}"></a>
                                </div>
                            </div>
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown">
                                        <a href="{{ route('index') }}">Beranda </a>
                                        <ul>
                                            <li class="{{ request()->routeIs('index') ? 'current' : '' }}"><a href="{{ route('index') }}">Beranda</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ request()->routeIs('about') ? 'current' : '' }}">
                                        <a href="{{ route('about') }}">Tentang Kami</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Layanan</a>
                                        <ul>
                                            <li class="{{ request()->routeIs('services') ? 'current' : '' }}"><a href="{{ route('services') }}">Layanan Kami</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Blog</a>
                                        <ul>
                                            <li class="{{ request()->routeIs('blog') ? 'current' : '' }}"><a href="{{ route('blog') }}">Blog</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ request()->routeIs('contact') ? 'current' : '' }}">
                                        <a href="{{ route('contact') }}">Kontak</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu__right">
                                <button
                                    class="btn"
                                    onclick="location.href='URL_HUBUNGI_KAMI';"
                                    style="background-color: #E63A27; color: white; padding: 15px 30px; border-radius: 12px; border: none; font-size: 16px;">
                                    Hubungi Kami
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        @yield('content')

        <section class="cta-two">
            <div class="container">
                <div class="cta-two__inner">
                    <div class="cta-two__bg" style="background-image: url({{ asset($configuration->path_footer_background ?? '') }});">
                    </div>
                    <div class="cta-two__img-and-content">
                        <div class="cta-two__img">
                            <img src="{{ asset($configuration->path_footer ?? '') }}" alt="{{ $configuration->website_name ?? '' }}">
                        </div>
                        <div class="cta-two__content">
                            <h3 class="cta-two__title">Satu Genteng Pada Satu Waktu</h3>
                            <p class="cta-two__text">Layanan atap melibatkan pemasangan, pemeliharaan, dan perbaikan atap untuk bangunan hunian dan komersial. Kontraktornya</p>
                            <div class="cta-two__btn-box">
                                <a href="https://wa.me/{{ $contact->phone_number ?? '' }}" class="cta-two__btn thm-btn-two">Hubungi Kami<span
                                        class="icon-dubble-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="mobile-nav__wrapper">

            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                <div class="logo-box">
                    <a href="{{ route('index') }}" aria-label="logo image"><img src="assetsfront/images/resources/logo-1.png"
                            width="140" alt="" /></a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container"></div>
                <!-- /.mobile-nav__container -->

                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:needhelp@packageName__.com">needhelp@maroof.com</a>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <a href="tel:666-888-0000">666 888 0000</a>
                    </li>
                </ul><!-- /.mobile-nav__contact -->
                <div class="mobile-nav__top">
                    <div class="mobile-nav__social">
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-facebook-square"></a>
                        <a href="#" class="fab fa-pinterest-p"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div><!-- /.mobile-nav__social -->
                </div><!-- /.mobile-nav__top -->



            </div>
            <!-- /.mobile-nav__content -->
        </div>
        <!-- /.mobile-nav__wrapper -->
        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <!-- /.search-popup__overlay -->
            <div class="search-popup__content">
                <form action="#">
                    <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                    <input type="text" id="search" placeholder="Search Here..." />
                    <button type="submit" aria-label="search submit" class="thm-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <!-- /.search-popup__content -->
        </div>
        <!-- /.search-popup -->
        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
            <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
            <span class="scroll-to-top__text"> Kembali Ke atas</span>
        </a>


        <!--Site Footer Start-->
        <footer class="site-footer-two">
            <div class="site-footer__bg"
                style="background-image: url({{ asset('assetsfront/images/backgrounds/site-footer-bg.png') }});">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <a href="#" class="site-footer__top-content">Dapatkan Ini <span> Dalam Sentuhan</span>
                            <div class="site-footer__top-arrow">
                                <img src="{{ asset('assetsfront/images/icon/arrow-up.png') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="site-footer__middle">
                <div class="container">
                    <div class="site-footer__middle-inner">
                        <div class="row d-flex flex-wrap">
                            <div class="col-xl-3 col-lg-6 col wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__logo text-center">
                                        <a href="{{ route('index') }}"><img
                                                src="{{ asset($configuration->path ?? '') }}" width="100px" height="auto"
                                                alt="{{ $configuration->website_name ?? '' }}"></a>
                                    </div>
                                    <p class="footer-widget__about-text text-center">{{ $aboutUs->overview ?? '' }}</p>
                                    <div class="footer-widget__social text-center">
                                        <a href="mailto:{{ $contact->email_address ?? '' }}"><span class="icon-envelope"></span></a>
                                        <a href="https://wa.me/{{ $contact->phone_number ?? '' }}" target="_blank"><span class="icon-whatsapp"></span>  </a>
                                        <a href="{{ $contact->instagram ?? '' }}" target="blank"><span class="icon-instagram"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-6 col wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__services">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Nav</h3>
                                    </div>
                                    <ul class="footer-widget__services-list list-unstyled">
                                        <li>
                                            <a href="{{ route('index') }}"><span
                                                    class="icon-angle-left"></span>Beranda</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}"><span
                                                    class="icon-angle-left"></span>Tentang Kami </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}"><span
                                                    class="icon-angle-left"></span>Layanan</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog') }}"><span
                                                    class="icon-angle-left"></span>Blog </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}"><span
                                                    class="icon-angle-left"></span>Kontak</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__contact">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Kontak</h3>
                                    </div>
                                    <div class="footer-widget__contact-inner">
                                        <ul class="footer-widget__contact-list list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-envelope"></span>
                                                </div>
                                                <div class="text">
                                                    <p><a
                                                            href="mailto:{{ $contact->email_address ?? '' }}" target="blank">{{ $contact->email_address ?? '' }},</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-location"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ $contact->address ?? '' }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-call"></span>
                                                </div>
                                                <div class="text">
                                                    <p><a href="https://wa.me/{{ $contact->phone_number ?? '' }}" target="blank">+{{ $contact->phone_number ?? '' }},</a> <a
                                                            href="https://wa.me/{{ $contact->phone_number_2 ?? '' }}" target="blank">+{{ $contact->phone_number_2 ?? '' }}</a></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col wow fadeInUp" data-wow-delay="400ms">
                                <iframe src="
                                {{ $contact->map ?? '' }}" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">{{ $configuration->footer ?? '' }}</p>
                        <ul class="list-unstyled site-footer__bottom-menu">
                            <li><a href="https://wa.me/{{ $contact->phone_number ?? '' }}" target="blank">Kontak Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->
    </div><!-- /.page-wrapper -->
    <!-- JS Here -->
    <script src="{{ asset('assetsfront/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/wNumb.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/wow.js') }}"></script>
    <script src="{{ asset('assetsfront/js/isotope.js') }}"></script>
    <script src="{{ asset('assetsfront/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assetsfront/js/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assetsfront/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/marquee.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/countdown.min.js') }}"></script>
    <script src="{{ asset('assetsfront/js/jquery-sidebar-content.js') }}"></script>

    <!-- template js -->
    <script src="{{ asset('assetsfront/js/script.js') }}"></script>
</body>

</html>
