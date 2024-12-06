@extends('frontend.layouts')
@section('title', $blog->title)
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
                <h2>Blog Detail </h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News Details Start-->
    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img">
                            <img src="assetsfront/images/blog/news-details-img-1.jpg" alt="">
                            <div class="news-details__date">
                                <p>{{ $blog->created_at }}</p>
                            </div>
                        </div>
                        <div class="news-details__content">
                            <img src="{{ asset($blog->path) }}" alt="{{ $blog->title ?? 'Blog Cover' }}" class="mb-4" width="800" height="800" loading="lazy">
                            <p class="news-details__author">Admin</p>
                            <h3 class="news-details__title">{{ $blog->title }}
                            </h3>
                            {!! $blog->description !!}
                        </div>
                        <div class="news-details__bottom">
                            <p class="news-details__tags">
                                <span>Tags</span>
                                @foreach (explode(',', $blog->keywords) as $keyword)
                                <a href="">{{ trim($keyword) }}</a>
                                @if (!$loop->last) @endif
                            @endforeach
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form action="{{ route('blog.search') }}" method="GET" class="sidebar__search-form">
                                <input type="search" name="search" placeholder="Search here">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">blog Terbaru</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                    @foreach ($blogs as $blog)
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assetsfront/images/blog/lp-1-1.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="{{ route('blog-detail', $blog->id) }}">{{ $blog->title }}</a>
                                            </h3>
                                        </div>
                                    </li>
                                    @endforeach
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__category">
                            <h3 class="sidebar__title">Kategori</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                @foreach ($categories as $category)
                                <li><a href="{{ route('blog.category', $category->id) }}">{{ $category->category }}<span
                                    class="icon-right-arrow"></span></a>
                        </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__tags">
                            <h3 class="sidebar__title">Tags</h3>
                            <div class="sidebar__tags-list">
                                @foreach (explode(',', $blog->keywords) as $keyword)
                                <a href="">{{ trim($keyword) }}</a>
                                @if (!$loop->last) @endif
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Details End-->
@endsection
