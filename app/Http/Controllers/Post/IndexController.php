<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Admin\Post\FilterRequest;

use App\Models\Post;

use function view;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(
            PostFilter::class,
            ['queryParams' => array_filter($data)]
        );
        $posts = Post::filter($filter)
            ->select('id', 'title', 'content', 'preview_image')
            ->withCount('comments', 'likes')
            ->paginate(9);
        return view('post.index', compact('posts'));
    }
}
