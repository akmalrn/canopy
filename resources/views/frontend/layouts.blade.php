<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', $configuration->title)</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assetsfront/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset($configuration->path_logo ?? '') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset($configuration->path_logo ?? '') }}" />

    <link rel="manifest" href="assetsfront/images/favicons/site.webmanifest" />
    <meta name="description" content="{{ $blog->descriptions ?? $configuration->meta_descriptions ?? '' }}" />
    <meta name="keywords" content="{{ $blog->keywords ?? $configuration->meta_keywords ?? '' }}" />


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/aports-icons/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/timepicker/timePicker.css') }}" />
    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assetsfront/css/aports.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsfront/css/aports-responsive.css') }}" />

    <style>
        .whatsapp-sidebar {
            position: fixed;
            left: 20px;
            bottom: 20px;
            width: 60px;
            height: 60px;
            background-color: #25d366;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .whatsapp-icon {
            font-size: 30px;
            color: white;
        }
    </style>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->
    <div class="whatsapp-sidebar">
        <a href="https://wa.me/{{ $contact->phone_number ?? '' }}?text=Permisi+Admin" target="_blank">
            <i class="fab fa-whatsapp whatsapp-icon"></i>
        </a>
    </div>


    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-header__top">
                <div class="main-header__top-inner">
                    <div class="main-header__top-left">
                        <ul class="list-unstyled main-header__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <p>{{ \Illuminate\Support\Str::limit($contact->address ?? '', 30) }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <p><a
                                            href="mailto:{{ $contact->email_address ?? '' }}">{{ $contact->email_address ?? '' }}</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <div class="main-header__top-time">
                            <p>{{ \Illuminate\Support\Str::limit($contact->hours ?? '', 30) }}</p>
                        </div>
                        <div class="main-header__social">
                            <a href="{{ $contact->instagram ?? '' }}" target="blank"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="{{ $contact->tiktok ?? '' }}" target="blank"><i class="fab fa-tiktok"></i></a>
                            <a href="{{ $contact->facebook ?? '' }}" target="blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="{{ route('index') }}"><img src="{{ asset($configuration->path ?? '') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown {{ Route::currentRouteName() == 'index' ? 'current' : '' }}">
                                    <a href="{{ route('index') }}"> Beranda </a>
                                    <ul class="shadow-box">
                                        <li><a href="{{ route('index') }}">Beranda</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Route::currentRouteName() == 'about' ? 'current' : '' }}">
                                    <a href="{{ route('about') }}">Tentang Kami</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Tipe Unit</a>
                                    <ul class="shadow-box">
                                        @foreach($categoryservices as $category)
                                        <li>
                                            <a href="{{ route('detail_service', ['category_id' => $category->id]) }}">{{ $category->category }}</a>
                                        </li>
                                    @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Berita</a>
                                    <ul class="shadow-box">
                                        <li><a href="{{ route('promo') }}">Promo</a></li>
                                        <li><a href="{{ route('blog') }}">Blog</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Kontak Kami</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__search-btn-box">
                                <div class="main-menu__search-box">
                                    <a href="#"
                                        class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                </div>
                                <div class="main-menu__btn-box">
                                    <a href="{{ route('contact') }}" class="thm-btn main-menu__btn">Jadwalkan</a>
                                </div>
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

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__top">
                <div class="site-footer__shape-1 float-bob-x">
                    <img src="assetsfront/images/shapes/site-footer-shape-1.png" alt="">
                </div>
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__about-text-box">
                                        <p class="footer-widget__about-text">{!! $about->description ?? '' !!}</p>
                                    </div>
                                    <div class="site-footer__social">
                                        <a href="{{ $contact->instagram ?? '' }}" target="blank"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="{{ $contact->tiktok ?? '' }}" target="blank"><i class="fab fa-tiktok"></i></a>
                                    <a href="{{ $contact->facebook ?? '' }}" target="blank"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__Explore">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Jelajahi</h3>
                                    </div>
                                    <ul class="footer-widget__Explore-list list-unstyled">
                                        <li><a href="{{ route('about') }}">Tentang</a></li>
                                        <li><a href="{{ route('services') }}">Tipe Unit</a></li>
                                        <li><a href="{{ route('promo') }}">Promo</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__find">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Cari</h3>
                                    </div>
                                    <p class="footer-widget__find-text">{{ $contact->address ?? '' }}</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="footer-widget__column footer-widget__Contact">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Kontak</h3>
                                    </div>
                                    <ul class="footer-widget__Contact-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-phone-alt"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="https://wa.me/{{ $contact->phone_number ?? '' }}">+{{ $contact->phone_number ?? '' }}</a></p>
                                                <p><a href="https://wa.me/{{ $contact->phone_number_2 ?? '' }}">+{{ $contact->phone_number_2 ?? '' }}</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>{{ $contact->hours ?? '' }}</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:{{ $contact->email_address ?? '' }}">{{ $contact->email_address ?? '' }}</a></p>
                                                <p><a href="mailto:{{ $contact->email_address_2 ?? '' }}">{{ $contact->email_address_2 ?? '' }}</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">{{ $configuration->footer ?? '' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{ route('index') }}" aria-label="logo image"><img
                        src="assetsfront/images/resources/logo-3.png" width="122" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:{{ $contact->email_address ?? '' }}">{{ $contact->email_address ?? '' }}</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="https://wa.me/{{ $contact->phone_number ?? '' }}?text=Permisi+Admin" target="blank">https://wa.me/{{ $contact->phone_number ?? '' }}</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="{{ $contact->instagram ?? '' }}" target="blank"><i
                        class="fab fa-instagram"></i></a>
                <a href="{{ $contact->tiktok ?? '' }}" target="blank"><i class="fab fa-tiktok"></i></a>
                <a href="{{ $contact->facebook ?? '' }}" target="blank"><i class="fab fa-youtube"></i></a>
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
            <form action="{{ route('blog.search') }}" method="GET">
                <label for="search" class="sr-only">Search here</label>
                <input type="text" id="search" name="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>

    <script src="{{ asset('assetsfront/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assetsfront/vendors/circleType/jquery.lettering.min.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset('assetsfront/js/aports.js') }}"></script>
</body>

</html>
