@extends('layouts.main')
@section('content')
    <main class="site-main">
        <div class="row flex-column align-items-center justify-content-center">
            <form action="" class="row col-4 filter-form flex-wrap pr-5" method="get">
                <div class=""><p class="text-center display-3 pt-3">Filter</p></div>
                <div class="col-6">
                    <div class="col-6">
                        <label class="d-block" for="title">Title</label>
                        <input class="d-block" type="text" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="col-6">
                        <label class="d-block" for="content">Content</label>
                        <input class="d-block" type="text" name="content" value="{{ old('content') }}">
                    </div>
                    <div class="mw-100 row flex-column justify-content-end mw-100 form-item m-4">
                        <button class="button d-block" type="submit">Применить</button>
                    </div>
                </div>
            </form>
        </div>
        <!--================ Start Blog Post Area =================-->
        <section class="blog-post-area section-margin">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @foreach($posts as $post)
                                <div class="col-md-4">
                                    <div class="single-recent-blog-post card-view">
                                        <div class="thumb">
                                            <img class="card-img rounded-0" src="{{ str_contains($post->preview_image, 'http') ? $post->preview_image : Storage::url($post->preview_image)}}" alt="">
                                            <ul class="thumb-info">
                                                <li><a href="#"><i class="ti-themify-favicon"></i>{{ $post->comments_count }} Comments</a></li>
                                                @auth()
                                                    <li>
                                                        <form action="{{ route('posts.like.store', $post->id) }}">
                                                            @csrf
                                                            <button class="border-0 bg-transparent" type="submit"><i
                                                                    class="ti-heart"></i>{{$post->likes_count}}
                                                            </button></form></li>
                                                @endauth
                                                @guest()
                                                    <li>
                                                        <span class="border-0 bg-transparent" type="submit"><i
                                                                class="ti-heart"></i>{{$post->likes_count}}
                                                        </span></li>
                                                @endguest
                                            </ul>
                                        </div>
                                        <div class="details mt-20">
                                            <a href="blog-single.html">
                                                <h3>{{ $post->title }}</h3>
                                            </a>
                                            <p>{{ $post->content }}</p>
                                            <a class="button" href="{{ route('posts.show', $post->id) }}">Read More <i class="ti-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    {{ $posts->appends(request()->query())->links() }}
                </div>
            </div>
        </section>
        <!--================ End Blog Post Area =================-->
    </main>
@endsection
