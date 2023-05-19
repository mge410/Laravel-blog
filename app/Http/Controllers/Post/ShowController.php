<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Category;
use App\Models\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        $categories = Category::withCount('posts')->take(Category::all()->count() < 7 ? Post::all()->count() : 7)->get()->sortByDesc(function ($category) {
            return $category->posts->count();
        });
        return view('post.show', compact('post', 'categories'));
    }
}
