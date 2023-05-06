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
                                <img class="card-img rounded-0" width="350px" height="200px"
                                     src="{{ str_contains($post->preview_image, 'http') ? $post->preview_image : Storage::url($post->preview_image)}}"
                                     alt="">
                            </div>
                            <div class="blog__slide__content">
                                <a class="blog__slide__label" href="#">Подробнее</a>
                                <h3><a href="#"> {{ $post->title }} </a></h3>
                                <p>2 days ago</p>
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
                                            <li><a href="#"><i class="ti-notepad"></i>{{$mainPost->created_at}}</a></li>
                                            <li><a href="#"><i class="ti-heart"></i>{{$mainPost->likes_count}}</a></li>
                                            <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="blog-single.html">
                                            <h3>Woman claims husband wants to name baby girl
                                                after his ex-lover sparking.</h3>
                                        </a>
                                        <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life
                                                style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                                        <p>Over yielding doesn't so moved green saw meat hath fish he him from given
                                            yielding lesser cattle were fruitful lights. Given let have, lesser their
                                            made him above gathered dominion sixth. Creeping deep said can't called
                                            second. Air created seed heaven sixth created living</p>
                                        <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-center display-3">Похоже тут ещё нету постов =(</p>
                        @endif
                    </div>

                    <!-- Start Blog Post Siddebar -->
                    <div class="col-lg-4 sidebar-widgets">
                        <div class="widget-wrap">
                            <div class="single-sidebar-widget newsletter-widget">
                                <h4 class="single-sidebar-widget__title">Новостная рассылка</h4>
                                <div class="form-group mt-30">
                                    <div class="col-autos">
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                               placeholder="Введите почту" onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = 'Введите почту'">
                                    </div>
                                </div>
                                <button class="bbtns d-block mt-20 w-100">Отправить</button>
                            </div>

                            @if($categories->count() > 0)
                                <div class="single-sidebar-widget post-category-widget">
                                    <h4 class="single-sidebar-widget__title">Топ {{$categories->count()}} Категорий</h4>
                                    <ul class="cat-list mt-20">
                                        @foreach($categories as $category)
                                            <li>
                                                <a href="#" class="d-flex justify-content-between">
                                                    <p> {{$category->title}} </p>
                                                    <p>({{ $category->posts_count }})</p>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="single-sidebar-widget popular-post-widget">
                                <h4 class="single-sidebar-widget__title">Популярные посты</h4>
                                <div class="popular-post-list">

                                    <div class="single-post-list">
                                        <div class="thumb">
                                            <img class="card-img rounded-0" src="img/blog/thumb/thumb1.png" alt="">
                                            <ul class="thumb-info">
                                                <li><a href="#">Adam Colinge</a></li>
                                                <li><a href="#">Dec 15</a></li>
                                            </ul>
                                        </div>
                                        <div class="details mt-20">
                                            <a href="blog-single.html">
                                                <h6>Accused of assaulting flight attendant miktake alaways</h6>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="single-post-list">
                                        <div class="thumb">
                                            <img class="card-img rounded-0" src="img/blog/thumb/thumb2.png" alt="">
                                            <ul class="thumb-info">
                                                <li><a href="#">Adam Colinge</a></li>
                                                <li><a href="#">Dec 15</a></li>
                                            </ul>
                                        </div>
                                        <div class="details mt-20">
                                            <a href="blog-single.html">
                                                <h6>Tennessee outback steakhouse the
                                                    worker diagnosed</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single-post-list">
                                        <div class="thumb">
                                            <img class="card-img rounded-0" src="img/blog/thumb/thumb3.png" alt="">
                                            <ul class="thumb-info">
                                                <li><a href="#">Adam Colinge</a></li>
                                                <li><a href="#">Dec 15</a></li>
                                            </ul>
                                        </div>
                                        <div class="details mt-20">
                                            <a href="blog-single.html">
                                                <h6>Tennessee outback steakhouse the
                                                    worker diagnosed</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="single-sidebar-widget__title">Популярные тэги</h4>
                                <ul class="list">
                                    <li>
                                        <a href="#">project</a>
                                    </li>
                                    <li>
                                        <a href="#">love</a>
                                    </li>
                                    <li>
                                        <a href="#">technology</a>
                                    </li>
                                    <li>
                                        <a href="#">travel</a>
                                    </li>
                                    <li>
                                        <a href="#">software</a>
                                    </li>
                                    <li>
                                        <a href="#">life style</a>
                                    </li>
                                    <li>
                                        <a href="#">design</a>
                                    </li>
                                    <li>
                                        <a href="#">illustration</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog Post Siddebar -->
            </div>
        </section>
        <!--================ End Blog Post Area =================-->
    </main>
@endsection
