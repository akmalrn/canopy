@extends('frontend.layouts')
@section('title', $aboutUs->title)
@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assetsfront/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>About Us</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span class="icon-angle-left"></span></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->


<!--About One Start -->
<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="about-one__left  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-one__img">
                        <img src="assetsfront/images/resources/about-one-img-1.png" alt="">
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
                                    <li>
                                        <div class="about-one__client-img">
                                            <img src="assetsfront/images/resources/about-one-happy-client-img-1.jpg"
                                                alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-one__client-img">
                                            <img src="assetsfront/images/resources/about-one-happy-client-img-2.jpg"
                                                alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-one__client-img">
                                            <img src="assetsfront/images/resources/about-one-happy-client-img-3.jpg"
                                                alt="">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-one__happy-client-content">
                                <div class="about-one__count count-box">
                                    <h3 class="count-text" data-stop="2000" data-speed="1500">00</h3>
                                    <span class="about-one__count-plus">+</span>
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
                            <span class="section-title__tagline">About Us</span>
                        </div>
                        <h2 class="section-title__title">Trust the <span>experts</span> in the a roofing
                            services</h2>
                    </div>
                    <div class="about-one__main-tab-box tabs-box">
                        <ul class="tab-buttons clearfix list-unstyled">
                            <li data-tab="#skills" class="tab-btn active-btn">
                                <p>Skills</p>
                            </li>
                            <li data-tab="#experience" class="tab-btn">
                                <p>Experience</p>
                            </li>
                            <li data-tab="#destination" class="tab-btn">
                                <p>Destination</p>
                            </li>
                        </ul>
                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab active-tab" id="skills">
                                <div class="about-one__tab-content-box">
                                    <p class="about-one__text-1">Construction is an essential industry that
                                        involves building adesigning the a structures such as buildings roads,
                                        bridges</p>
                                    <div class="about-one__points-box">
                                        <ul class="about-one__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Rise Above the Roof Service</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Premier Roofing Specialists</p>
                                            </li>
                                        </ul>
                                        <ul class="about-one__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Safeguard Pro Surveillance</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Elite Roofing Solutions</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="about-one__btn-box">
                                        <a href="#" class="about-one__btn thm-btn">Read
                                            more<span class="icon-dubble-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <!--tab-->
                            <div class="tab " id="experience">
                                <div class="about-one__tab-content-box">
                                    <p class="about-one__text-1">Construction is an essential industry that
                                        involves building adesigning the a structures such as buildings roads,
                                        bridges</p>
                                    <div class="about-one__points-box">
                                        <ul class="about-one__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Rise Above the Roof Service</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Premier Roofing Specialists</p>
                                            </li>
                                        </ul>
                                        <ul class="about-one__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Safeguard Pro Surveillance</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Elite Roofing Solutions</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="about-one__btn-box">
                                        <a href="#" class="about-one__btn thm-btn">Read
                                            more<span class="icon-dubble-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <!--tab-->
                            <div class="tab " id="destination">
                                <div class="about-one__tab-content-box">
                                    <p class="about-one__text-1">Construction is an essential industry that
                                        involves building adesigning the a structures such as buildings roads,
                                        bridges</p>
                                    <div class="about-one__points-box">
                                        <ul class="about-one__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Rise Above the Roof Service</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Premier Roofing Specialists</p>
                                            </li>
                                        </ul>
                                        <ul class="about-one__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Safeguard Pro Surveillance</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Elite Roofing Solutions</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="about-one__btn-box">
                                        <a href="#" class="about-one__btn thm-btn">Read
                                            more<span class="icon-dubble-arrow-right"></span></a>
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
</section>
<!--About One End -->

<!--Counter Two Start -->
<section class="counter-two">
    <div class="counter-two__wrap">
        <div class="counter-two__bg-shape float-bob-y"
            style="background-image: url(assetsfront/images/shapes/counter-two-bg-shape.png);"></div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">why we are the best</span>
                </div>
                <h2 class="section-title__title">Reach for the <span>Roof <br>Service</span> Stars Trust Roof
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="counter-two__left">
                        <ul class="counter-two__points-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-architect"></span>
                                </div>
                                <div class="content">
                                    <h3>Reliable Roofing Pros</h3>
                                    <p>Roof service involves the installation, maintenance, and repair of roofs
                                        for
                                        the residential </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-blueprint"></span>
                                </div>
                                <div class="content">
                                    <h3>Vertex Roofing Specialists</h3>
                                    <p>Roof service involves the installation, maintenance, and repair of roofs
                                        for
                                        the residential </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-wall"></span>
                                </div>
                                <div class="content">
                                    <h3>Ridgeguard Roofing</h3>
                                    <p>Roof service involves the installation, maintenance, and repair of roofs
                                        for
                                        the residential </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="counter-two__right">
                        <div class="counter-two__right-bg-shape"
                            style="background-image: url(assetsfront/images/shapes/counter-two-right-bg-shape.png);">
                        </div>
                        <div class="row">
                            <!--Counter Two Single Start-->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="counter-two__single">
                                    <div class="counter-two__icon">
                                        <span class="icon-architect"></span>
                                    </div>
                                    <div class="counter-two__count-box">
                                        <div class="counter-two__count count-box">
                                            <h3 class="count-text" data-stop="30" data-speed="1500">00</h3>
                                            <span>k</span>
                                            <span>+</span>
                                        </div>
                                        <p class="counter-two__count-text">Our Project Complete</p>
                                    </div>
                                </div>
                            </div>
                            <!--Counter Two Single End-->
                            <!--Counter Two Single Start-->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="counter-two__single">
                                    <div class="counter-two__icon">
                                        <span class="icon-paint-roller"></span>
                                    </div>
                                    <div class="counter-two__count-box">
                                        <div class="counter-two__count count-box">
                                            <h3 class="count-text" data-stop="2" data-speed="1500">00</h3>
                                            <span>k</span>
                                            <span>+</span>
                                        </div>
                                        <p class="counter-two__count-text">Our Team Member</p>
                                    </div>
                                </div>
                            </div>
                            <!--Counter Two Single End-->
                            <!--Counter Two Single Start-->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="counter-two__single">
                                    <div class="counter-two__icon">
                                        <span class="icon-wall"></span>
                                    </div>
                                    <div class="counter-two__count-box">
                                        <div class="counter-two__count count-box">
                                            <h3 class="count-text" data-stop="20" data-speed="1500">00</h3>
                                            <span>k</span>
                                            <span>+</span>
                                        </div>
                                        <p class="counter-two__count-text">Clients Reviews</p>
                                    </div>
                                </div>
                            </div>
                            <!--Counter Two Single End-->
                            <!--Counter Two Single Start-->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="counter-two__single">
                                    <div class="counter-two__icon">
                                        <span class="icon-stairs"></span>
                                    </div>
                                    <div class="counter-two__count-box">
                                        <div class="counter-two__count count-box">
                                            <h3 class="count-text" data-stop="7" data-speed="1500">00</h3>
                                            <span>k</span>
                                            <span>+</span>
                                        </div>
                                        <p class="counter-two__count-text">Our Winning Award</p>
                                    </div>
                                </div>
                            </div>
                            <!--Counter Two Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Counter Two End -->

<!-- We Serve Start -->
<section class="we-serve">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">We serve</span>
            </div>
            <h2 class="section-title__title">Above All <span>Your Roof</span><br> Very Matter</h2>
        </div>
        <div class="we-serve__main-tab-box tabs-box">
            <div class="row">
                <div class="col-xl-3">
                    <div class="we-serve__left">
                        <ul class="tab-buttons list-unstyled">
                            <li data-tab="#roofing-layers" class="tab-btn active-btn"><span>Roofing
                                    Layers</span>
                            </li>
                            <li data-tab="#roof-solar" class="tab-btn"><span>Roof Solar Panels</span>
                            <li data-tab="#roof-renovation" class="tab-btn"><span>Roof Renovation</span>
                            </li>
                            <li data-tab="#roof-installation" class="tab-btn"><span>Roof Installation</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab active-tab" id="roofing-layers">
                            <div class="we-serve__right">
                                <div class="we-serve__content-box">
                                    <div class="we-serve__content-left">
                                        <span class="we-serve__content-tagline">About Us</span>
                                        <h2 class="we-serve__content-title">Trust the <span>experts</span> in
                                            the a<br>
                                            roofing
                                            services</h2>
                                        <p class="we-serve__text">Construction is an essential industry that
                                            involves<br>
                                            building adesigning the a structures such </p>
                                        <ul class="we-serve__points-box list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Rise Above the Roof Service</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Premier Roofing Specialists</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="we-serve__content-right">
                                        <div class="we-serve__content-count-box">
                                            <div class="we-serve__content-count-shape-1">
                                                <img src="assetsfront/images/shapes/we-serve-count-shape-1.png"
                                                    alt="">
                                            </div>
                                            <div class="we-serve__count count-box">
                                                <h3 class="count-text" data-stop="11" data-speed="1500">00</h3>
                                                <span>k</span>
                                                <span>+</span>
                                            </div>
                                            <p class="we-serve__count-text">Clients Reviews</p>
                                        </div>
                                        <div class="we-serve__content-ratting-box">
                                            <div class="we-serve__content-ratting">
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star last-icon"></span>
                                            </div>
                                            <p>Score 4.1 (from clients) </p>
                                            <div class="we-serve__content-review">
                                                <a href="#">Read reviews<span
                                                        class="icon-dubble-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab" id="roof-solar">
                            <div class="we-serve__right">
                                <div class="we-serve__content-box">
                                    <div class="we-serve__content-left">
                                        <span class="we-serve__content-tagline">About Us</span>
                                        <h2 class="we-serve__content-title">Trust the <span>experts</span> in
                                            the a<br>
                                            roofing
                                            services</h2>
                                        <p class="we-serve__text">Construction is an essential industry that
                                            involves<br>
                                            building adesigning the a structures such </p>
                                        <ul class="we-serve__points-box list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Rise Above the Roof Service</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Premier Roofing Specialists</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="we-serve__content-right">
                                        <div class="we-serve__content-count-box">
                                            <div class="we-serve__content-count-shape-1">
                                                <img src="assetsfront/images/shapes/we-serve-count-shape-1.png"
                                                    alt="">
                                            </div>
                                            <div class="we-serve__count count-box">
                                                <h3 class="count-text" data-stop="11" data-speed="1500">00</h3>
                                                <span>k</span>
                                                <span>+</span>
                                            </div>
                                            <p class="we-serve__count-text">Clients Reviews</p>
                                        </div>
                                        <div class="we-serve__content-ratting-box">
                                            <div class="we-serve__content-ratting">
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star last-icon"></span>
                                            </div>
                                            <p>Score 4.1 (from clients) </p>
                                            <div class="we-serve__content-review">
                                                <a href="#">Read reviews<span
                                                        class="icon-dubble-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab" id="roof-renovation">
                            <div class="we-serve__right">
                                <div class="we-serve__content-box">
                                    <div class="we-serve__content-left">
                                        <span class="we-serve__content-tagline">About Us</span>
                                        <h2 class="we-serve__content-title">Trust the <span>experts</span> in
                                            the a<br>
                                            roofing
                                            services</h2>
                                        <p class="we-serve__text">Construction is an essential industry that
                                            involves<br>
                                            building adesigning the a structures such </p>
                                        <ul class="we-serve__points-box list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Rise Above the Roof Service</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Premier Roofing Specialists</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="we-serve__content-right">
                                        <div class="we-serve__content-count-box">
                                            <div class="we-serve__content-count-shape-1">
                                                <img src="assetsfront/images/shapes/we-serve-count-shape-1.png"
                                                    alt="">
                                            </div>
                                            <div class="we-serve__count count-box">
                                                <h3 class="count-text" data-stop="11" data-speed="1500">00</h3>
                                                <span>k</span>
                                                <span>+</span>
                                            </div>
                                            <p class="we-serve__count-text">Clients Reviews</p>
                                        </div>
                                        <div class="we-serve__content-ratting-box">
                                            <div class="we-serve__content-ratting">
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star last-icon"></span>
                                            </div>
                                            <p>Score 4.1 (from clients) </p>
                                            <div class="we-serve__content-review">
                                                <a href="#">Read reviews<span
                                                        class="icon-dubble-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab" id="roof-installation">
                            <div class="we-serve__right">
                                <div class="we-serve__content-box">
                                    <div class="we-serve__content-left">
                                        <span class="we-serve__content-tagline">About Us</span>
                                        <h2 class="we-serve__content-title">Trust the <span>experts</span> in
                                            the a<br>
                                            roofing
                                            services</h2>
                                        <p class="we-serve__text">Construction is an essential industry that
                                            involves<br>
                                            building adesigning the a structures such </p>
                                        <ul class="we-serve__points-box list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Rise Above the Roof Service</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <p>Premier Roofing Specialists</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="we-serve__content-right">
                                        <div class="we-serve__content-count-box">
                                            <div class="we-serve__content-count-shape-1">
                                                <img src="assetsfront/images/shapes/we-serve-count-shape-1.png"
                                                    alt="">
                                            </div>
                                            <div class="we-serve__count count-box">
                                                <h3 class="count-text" data-stop="11" data-speed="1500">00</h3>
                                                <span>k</span>
                                                <span>+</span>
                                            </div>
                                            <p class="we-serve__count-text">Clients Reviews</p>
                                        </div>
                                        <div class="we-serve__content-ratting-box">
                                            <div class="we-serve__content-ratting">
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star last-icon"></span>
                                            </div>
                                            <p>Score 4.1 (from clients) </p>
                                            <div class="we-serve__content-review">
                                                <a href="#">Read reviews<span
                                                        class="icon-dubble-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- We Serve End -->

<!-- Testimonial One Start -->
<section class="testimonial-one">
    <div class="testimonial-one__wrap">
        <div class="testimonial-one__shape-1">
            <img src="assetsfront/images/shapes/testimonial-one-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="section-title text-left">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Clients testimonial</span>
                </div>
                <h2 class="section-title__title">Sheltering You with <span>Strength</span></h2>
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
                <!--Testimonial One Single Start-->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__quote">
                            <span class="icon-quote"></span>
                        </div>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img">
                                <img src="assetsfront/images/testimonial/testimonial-1-2.jpg" alt="">
                            </div>
                            <div class="testimonial-one__client-content">
                                <h3><a href="testimonials.php">Sajid Hasan</a></h3>
                                <p>Roofing Masters</p>
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
                <!--Testimonial One Single Start-->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__quote">
                            <span class="icon-quote"></span>
                        </div>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img">
                                <img src="assetsfront/images/testimonial/testimonial-1-3.jpg" alt="">
                            </div>
                            <div class="testimonial-one__client-content">
                                <h3><a href="testimonials.php">Adam Smith</a></h3>
                                <p>Roof Renovation</p>
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
                <!--Testimonial One Single Start-->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__quote">
                            <span class="icon-quote"></span>
                        </div>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img">
                                <img src="assetsfront/images/testimonial/testimonial-1-4.jpg" alt="">
                            </div>
                            <div class="testimonial-one__client-content">
                                <h3><a href="testimonials.php">Robert Son</a></h3>
                                <p>Roofing Specialists</p>
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
<!-- Testimonial One End -->

<!--Brand One Start-->
<section class="brand-one brand-two">
    <div class="container">
        <div class="brand-one__carousel owl-theme owl-carousel">
            <!--Brand One Single-->
            <div class="brand-one__single">
                <div class="brand-one__img">
                    <img src="assetsfront/images/brand/brand-1-1.png" alt="">
                </div>
            </div>
            <!--Brand One Single-->
            <div class="brand-one__single">
                <div class="brand-one__img">
                    <img src="assetsfront/images/brand/brand-1-2.png" alt="">
                </div>
            </div>
            <!--Brand One Single-->
            <div class="brand-one__single">
                <div class="brand-one__img">
                    <img src="assetsfront/images/brand/brand-1-3.png" alt="">
                </div>
            </div>
            <!--Brand One Single-->
            <div class="brand-one__single">
                <div class="brand-one__img">
                    <img src="assetsfront/images/brand/brand-1-4.png" alt="">
                </div>
            </div>
            <!--Brand One Single-->
            <div class="brand-one__single">
                <div class="brand-one__img">
                    <img src="assetsfront/images/brand/brand-1-5.png" alt="">
                </div>
            </div>
        </div>
        <!-- If we need navigation buttons -->
    </div>
</section>
<!--Brand One End-->

<!-- Service Three Start -->
<section class="services-three">
    <div class="container">
        <div class="services-three__inner">
            <ul class="services-three__service-list list-unstyled">
                <li class="hover-item">
                    <div class="services-three__service-list-single">
                        <a href="#" class="services-three__long-arrow">
                            <img src="assetsfront/images/icon/long-arrow.png" alt="">
                        </a>
                        <div class="services-three__sub-title">
                            <p>Maintenance</p>
                        </div>
                        <h3 class="services-three__title"><a href="peak-performance-roofing.php">Elevation
                                Elite
                                Roof</a></h3>
                    </div>
                    <div class="hover-item__box">
                        <img src="assetsfront/images/services/services-three-service-list-img-1.jpg" alt="Image"
                            class="hover-item__box-img">
                    </div>
                </li>
                <li class="hover-item active">
                    <div class="services-three__service-list-single">
                        <a href="#" class="services-three__long-arrow">
                            <img src="assetsfront/images/icon/long-arrow.png" alt="">
                        </a>
                        <div class="services-three__sub-title">
                            <p>Repairs</p>
                        </div>
                        <h3 class="services-three__title"><a href="sure-guard-roofing-services.php">Zenith
                                Roofing</a>
                        </h3>
                    </div>
                    <div class="hover-item__box">
                        <img src="assetsfront/images/services/services-three-service-list-img-2.jpg" alt="Image"
                            class="hover-item__box-img">
                    </div>
                </li>
                <li class="hover-item">
                    <div class="services-three__service-list-single">
                        <a href="#" class="services-three__long-arrow">
                            <img src="assetsfront/images/icon/long-arrow.png" alt="">
                        </a>
                        <div class="services-three__sub-title">
                            <p>Inspections</p>
                        </div>
                        <h3 class="services-three__title"><a href="skyline-roofing-solutions.php">Skyline Pro
                                Roofing</a></h3>
                    </div>
                    <div class="hover-item__box">
                        <img src="assetsfront/images/services/services-three-service-list-img-3.jpg" alt="Image"
                            class="hover-item__box-img">
                    </div>
                </li>
                <li class="hover-item">
                    <div class="services-three__service-list-single">
                        <a href="#" class="services-three__long-arrow">
                            <img src="assetsfront/images/icon/long-arrow.png" alt="">
                        </a>
                        <div class="services-three__sub-title">
                            <p>Restoration</p>
                        </div>
                        <h3 class="services-three__title"><a href="top-notch-roofing-restoration.php">Altitude
                                Roof
                                Expert</a></h3>
                    </div>
                    <div class="hover-item__box">
                        <img src="assetsfront/images/services/services-three-service-list-img-4.jpg" alt="Image"
                            class="hover-item__box-img">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Service Three End -->

@endsection
