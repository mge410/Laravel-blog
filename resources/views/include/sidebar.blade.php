<div class="col-lg-4 sidebar-widgets">
    <div class="widget-wrap">
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
