@extends('frontend.layouts')
@section('title', 'Blog')
@section('content')
     <!--Page Header Start-->
     <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assetsfront/images/backgrounds/blog.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Beranda</a></li>
                    <li><span>/</span></li>
                    <li>Blog</li>
                </ul>
                <h2>Blog Terbaru</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News Page Start-->
    <section class="news-page">
        <div class="container">
            <div class="row">
                <!-- Cek jika ada blog yang ditemukan -->
                @if($blogs->isEmpty())
                    <div class="col-12">
                        <p>Blog Tidak Ditemukan</p>
                    </div>
                @else
                    <!-- News One Single Start -->
                    @foreach ($blogs as $blog)
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="{{ asset($blog->path) }}" alt="{{ $blog->title }}" width="500px" height="500px">
                                </div>
                                <div class="news-one__content-box">
                                    <div class="news-one__date">
                                        <p>{{ $blog->created_at }}</p>
                                    </div>
                                    <div class="news-one__content">
                                        <p class="news-one__author">Admin</p>
                                        <h3 class="news-one__title">
                                            <a href="{{ route('blog-detail', $blog->id) }}">{{ $blog->title }}</a>
                                        </h3>
                                    </div>
                                    <div class="news-one__bottom">
                                        <a href="{{ route('blog-detail', $blog->id) }}" class="news-one__more">
                                            <i class="fa fa-arrow-right"></i> Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- News One Single End -->
                @endif
            </div>
        </div>
    </section>
    <!--News Page End-->
@endsection
