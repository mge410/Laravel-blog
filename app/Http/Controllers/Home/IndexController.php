<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

use App\Models\Tag;
use function view;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::query()->select('title')
            ->withCount('posts')
            ->limit(7)
            ->orderByDesc('posts_count')
            ->get();

        $popularPosts = Post::withCount('likes')
            ->orderBy('likes_count', 'desc')
            ->limit(3)
            ->get();
        $popularTags = Tag::withCount('posts')
            ->orderBy('posts_count', 'desc')->limit(10)->get('id', 'title');

        $randomPosts = Post::where('is_main', false)
            ->inRandomOrder()
            ->limit(6)
            ->get(['id', 'title', 'preview_image', 'content']);

        $mainPosts = Post::with(['tags' => function ($query) {
            $query
                ->select('tags.id', 'tags.title');
        }])
            ->withCount('likes', 'comments')
            ->where('is_main', '=', true)
            ->get(['id', 'title', 'preview_image', 'content']);

        return view(
            'home.index',
            compact(
                'categories',
                'randomPosts',
                'mainPosts',
                'popularPosts',
                'popularTags',
            )
        );
    }
}
