@extends('layouts.main')
@section('content')
    <section class="blog-post-area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main_blog_details">
                        <img class="img-fluid"
                             src="{{ str_contains($post->preview_image, 'http') ? $post->preview_image : Storage::url($post->preview_image)}}"
                             alt="">
                        <a href="#"><h4>Cartridge Is Better Than Ever <br/> A
                                Discount Toner</h4></a>
                        <div class="user_details">
                            <div class="float-left">
                                @foreach($post->tags as $tag)
                                    <a href="#">{{$tag->title}}</a>
                                @endforeach
                            </div>
                        </div>
                        {{ $post->content }}
                    </div>


                    <div class="navigation-area">
                        <div class="row">
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid"
                                                     src="img/blog/prev.jpg"
                                                     alt=""></a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><span
                                            class="lnr text-white lnr-arrow-left"></span></a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                </div>
                                <div class="arrow">
                                    <a href="#"><span
                                            class="lnr text-white lnr-arrow-right"></span></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid"
                                                     src="img/blog/next.jpg"
                                                     alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comments-area">

                        <h4>{{ count($comments) }} Comments</h4>
                        @foreach($comments as $comment)
                            <div class="comment-list">
                                <div
                                    class="single-comment justify-content-between d-flex">
                                    <div
                                        class="user justify-content-between d-flex">
                                        <div class="desc">
                                            <h5>
                                                <a href="#">{{ $comment->user->name }}</a>
                                            </h5>
                                            <p class="date">{{ $comment->getDateCarbon()->diffForHumans() }} </p>
                                            <p class="comment">
                                                {{ $comment->comment }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @auth()
                        <div class="comment-form">
                            <h4>Leave a Reply</h4>
                            <form
                                action=" {{ route('posts.comment.store', $post->id) }} ">
                                @csrf
                                <div class="form-group">
                                    <textarea class="form-control mb-10"
                                              rows="5" name="comment"
                                              placeholder="Messege"
                                              onfocus="this.placeholder = ''"
                                              onblur="this.placeholder = 'Messege'"
                                              required="">{{ old('comment')  }}</textarea>
                                    @error('comment')
                                    <p class="table-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button href="" class="button submit_btn">Post
                                    Comment
                                </button>
                            </form>
                        </div>
                    @endauth
                </div>
                <!-- Start Blog Post Siddebar -->
                @include('include.sidebar')
            </div>
            <!-- End Blog Post Siddebar -->
        </div>
    </section>
@endsection
