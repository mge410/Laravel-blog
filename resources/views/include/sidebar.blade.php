<div class="col-lg-4 sidebar-widgets">
    <div class="widget-wrap">
        <div class="single-sidebar-widget popular-post-widget">
            <h4 class="single-sidebar-widget__title">Популярные посты</h4>
            <div class="popular-post-list">
                @foreach($popularPosts as $popularPost)
                <div class="single-post-list">
                    <div class="thumb">
                        <img class="card-img rounded-0" src="{{ str_contains($popularPost->preview_image, 'http') ? $popularPost->preview_image : Storage::url($popularPost->preview_image)}}" alt="">
                        <ul class="thumb-info">
                            <li><a href="{{ route('posts.show', $popularPost->id) }}">{{ $popularPost->title }}</a></li>
                            <li><a href="{{ route('posts.show', $popularPost->id) }}">{{ $popularPost->getDateCarbon()->format('Y-m-d') }}</a></li>
                        </ul>
                    </div>
                    <div class="details mt-20">
                        <a href="blog-single.html">
                            <h6>{{ Str::limit($popularPost->content) }}</h6>
                        </a>
                    </div>
                </div>
                @endforeach
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
                @foreach($popularTags as $popularTag)
                <li>
                    <a href="#">{{ $popularTag->title }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
