@extends('frontend.layouts')
@section('content')
       <!--Page Header Start-->
       <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assetsfront/images/backgrounds/page-header-bg.png);">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Blog</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Beranda</a></li>
                        <li><span class="icon-angle-left"></span></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Blog Page Start-->
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <!--Blog One Single Start-->
                @foreach ($blogs as $blog)
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset($blog->path) }}" alt="{{ $blog->title }}" width="100px" height="200px" style=" object-fit: cover;">
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="{{ route('blog-detail', $blog->id) }}"><span class="icon-user"></span>By admin</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-detail', $blog->id) }}"><span class="icon-callender"></span>{{ $blog->created_at }}</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="{{ route('blog-detail', $blog->id) }}">{{ $blog->title }}</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-detail', $blog->id) }}" class="blog-one__btn thm-btn-two">Baca Selengkapnya<span
                                        class="icon-dubble-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Blog One Single End-->
            </div>
        </div>
    </section>
    <!--Blog Page End-->

@endsection
