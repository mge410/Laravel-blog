@extends('layouts.main')
@section('content')
    <main class="site-main">
{{--        <div class="row flex-column align-items-center">--}}
{{--            <div class="row col-8">--}}
{{--                <form action="" class="form" method="get">--}}
{{--                    <label for="title">Title</label>--}}
{{--                    <input type="text" name="title" value="{{ old('title') }}">--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
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
                                                <li><a href="#"><i class="ti-heart"></i>{{ $post->likes_count }} Likes</a></li>
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
                    {{ $posts->links() }}
                </div>
            </div>
        </section>
        <!--================ End Blog Post Area =================-->
    </main>
@endsection
