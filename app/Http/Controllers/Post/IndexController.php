<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\FilterRequest;

use App\Models\Post;

use function view;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $posts = Post::withCount('comments')->withCount('likes')->paginate(9);
        return view('post.index', compact('posts'));
    }
}
