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
        $categories = Category::withCount('posts')->take(7)->get()->sortByDesc(function ($category) {
            return $category->posts->count();
        });
        $randomPost = Post::get()->random(Post::all()->count() < 6 ? Post::all()->count() : 6);
        $mainPostsList = Post::withCount('likes')->withCount('comments')->where('is_main', '=', true)->get();
        return view('home.index', compact('categories', 'randomPost', 'mainPostsList'));
    }
}
