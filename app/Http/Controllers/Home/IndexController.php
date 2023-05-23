<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

use function view;

class IndexController extends Controller
{
    public function __invoke()
    {
        $postCount = Post::count();
        $categoryCount = Category::count();

        $categories = Category::query()->select('title')
            ->withCount('posts')
            ->limit(min($categoryCount, 7))
            ->orderByDesc('posts_count')
            ->get();

        $randomPosts = Post::where('is_main', false)
            ->inRandomOrder()
            ->limit(min($postCount, 6))
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
                'mainPosts'
            )
        );
    }
}
