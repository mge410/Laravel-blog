<?php

namespace App\Http\Controllers\Main\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::withCount('posts')->take(7)->get()->sortByDesc(function ($category){
            return $category->posts->count();
        });
        $randomPost = Post::get()->random(6);
        return view('main.home.index', compact('categories', 'randomPost'));
    }
}
