@extends('layouts.main')
@section('content')
    <main class="site-main">
        <!--================Hero Banner start =================-->
        <section class="mb-30px">
            <div class="container">
                <div class="hero-banner">
                    <div class="hero-banner__content">
                        <h3>Путешенстви & Приключения</h3>
                        <h1>Удивительные вещи на земле</h1>
                        <h4>И котики</h4>
                    </div>
                </div>
            </div>
        </section>
        <!--================Hero Banner end =================-->

        <!--================ Blog slider start =================-->
        <section>
            <div class="container">
                <div class="owl-carousel owl-theme blog-slider">
                    @foreach($randomPost as $post)
                        <div class="card blog__slide text-center">
                            <div class="blog__slide__img">
                                <img class="card-img rounded-0" width="350px"
                                     height="200px"
                                     src="{{ str_contains($post->preview_image, 'http') ? $post->preview_image : Storage::url($post->preview_image)}}"
                                     alt="">
                            </div>
                            <div class="blog__slide__content">
                                <a class="blog__slide__label"
                                   href="{{ route('posts.show', $post->id) }}">Read
                                    More</a>
                                <h3><a href="#"> {{ $post->title }} </a></h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--================ Blog slider end =================-->

        <!--================ Start Blog Post Area =================-->
        <section class="blog-post-area section-margin mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        @if($mainPostsList->count() > 0)
                            @foreach($mainPostsList as $mainPost)
                                <div class="single-recent-blog-post">
                                    <div class="thumb">
                                        <img class="img-fluid post-image"
                                             src="{{ str_contains($mainPost->preview_image, 'http') ? $mainPost->preview_image : Storage::url($mainPost->preview_image)}}"
                                             alt="">
                                        <ul class="thumb-info">
                                            <li><i
                                                        class="ti-notepad"></i>{{$mainPost->created_at}}
                                                </li>
                                            <li><a href="#"><i
                                                        class="ti-heart"></i>{{$mainPost->likes_count}}
                                                </a></li>
                                            <li><a href="#"><i
                                                        class="ti-themify-favicon"></i>{{$mainPost->comments_count}}
                                                    Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="blog-single.html">
                                            <h3>{{ $post->title }}</h3>
                                        </a>
                                        <p class="tag-list-inline">
                                            Tags:
                                            @foreach($post->tags as $tag)
                                                <a href="#">{{$tag->title}}</a>
                                            @endforeach
                                            </p>
                                        <p>{{ $post->content }}</p>
                                        <a class="button"
                                           href="{{ route('posts.show', $post->id) }}">Read
                                            More <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-center display-3">Похоже тут ещё нету
                                постов =(</p>
                        @endif
                    </div>

                    @include('include.sidebar')
                </div>
            </div>
        </section>
        <!--================ End Blog Post Area =================-->
    </main>
@endsection
