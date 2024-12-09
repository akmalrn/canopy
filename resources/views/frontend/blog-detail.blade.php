@extends('frontend.layouts')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url('{{ asset($blog->path) }}');">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>detail Blog</h2>
            </div>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('index') }}">Beranda</a></li>
                        <li><span class="icon-angle-left"></span></li>
                        <li>detail Blog</li>
                    </ul>
                </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Blog Details Start-->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">
                        <div class="blog-details__img">
                            <img src="{{ asset($blog->path) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="blog-details__content">
                            <ul class="blog-details__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-callender"></span>
                                    </div>
                                    <a href="#">{{ $blog->created_at }}</a>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-user-2"></span>
                                    </div>
                                    <a href="#">By admin</a>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-file"></span>
                                    </div>
                                    <a href="#">{{ $blog->category->category }}</a>
                                </li>
                            </ul>
                            <h3 class="blog-details__title-1">{{ $blog->title }}</h3>
                            <p class="blog-details__text-1">{!! $blog->description !!}
                            </p>
                            <div class="blog-details__tag-and-social">
                                <div class="blog-details__tag">
                                    <span>Tag:</span>
                                    <?php
                                    $keywords = explode(',', $blog->keywords ?? '');
                                    ?>
                                    @foreach ($keywords as $keyword)
                                        <a href="#">{{ trim($keyword) }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="blog-details__pagenation-box">
                                <ul class="list-unstyled blog-details__pagenation">
                                    <li>
                                        <div class="icon">
                                            <a href="#"><span class="icon-arrow-left"></span></a>
                                        </div>
                                        <p>Previous</p>
                                    </li>
                                    <li>
                                        <p>Next</p>
                                        <div class="icon">
                                            <a href="#"><span class="icon-arrow-right"></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <div class="sidebar__title-box">
                                <div class="sidebar__title-shape">
                                    <img src="assetsfront/images/shapes/sidebar-title-shape.png" alt="">
                                </div>
                                <h3 class="sidebar__title">Search</h3>
                            </div>
                            <form action="{{ route('blog.search') }}" method="GET" class="sidebar__search-form">
                                <input type="search" name="keyword" value="{{ old('keyword', $keyword ?? '') }}" placeholder="Cari blog...">
                                <button type="submit"><i class="icon-search"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post">
                            <div class="sidebar__title-box">
                                <div class="sidebar__title-shape">
                                    <img src="assetsfront/images/shapes/sidebar-title-shape.png" alt="">
                                </div>
                                <h3 class="sidebar__title">Search</h3>
                            </div>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($blogs as $blog)
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="{{ asset($blog->path) }}" alt="{{ $blog->title }}">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <a href="{{ route('blog-detail', $blog->id) }}">{{ $blog->title }}</a>
                                        </h3>
                                        <p class="sidebar__post-date"><i class="icon-callender-2"></i>{{ $blog->created_at }}
                                        </p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__tags">
                            <div class="sidebar__title-box">
                                <div class="sidebar__title-shape">
                                    <img src="assetsfront/images/shapes/sidebar-title-shape.png" alt="">
                                </div>
                                <h3 class="sidebar__title">Tag</h3>
                            </div>
                            <div class="sidebar__tags-list">
                                @foreach ($keywords as $keyword)
                                <a href="#">{{ trim($keyword) }}</a>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Details End-->
@endsection
