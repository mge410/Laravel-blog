<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        $categoryCount = Category::count();

        $categories = Category::query()->select('title')
            ->withCount('posts')
            ->limit(min($categoryCount, 7))
            ->orderByDesc('posts_count')
            ->get();
        $comments = Comment::select('id', 'comment', 'created_at', 'post_id', 'user_id')
            ->where('post_id', '=', $post->id)
            ->with(['user' => function ($query) {
                $query->select('id', 'name');
            }])->get();
        return view(
            'post.show',
            compact('post', 'categories', 'comments')
        );
    }
}
