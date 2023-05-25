<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
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
        $comments = Comment::select(
            'id',
            'comment',
            'created_at',
            'post_id',
            'user_id'
        )
            ->where('post_id', '=', $post->id)
            ->with(['user' => function ($query) {
                $query->select('id', 'name');
            }])->get();
        $popularTags = Tag::withCount('posts')
            ->orderBy('posts_count', 'desc')->limit(10)->get('id', 'title');

        return view(
            'post.show',
            compact(
                'post',
                'categories',
                'comments',
                'popularPosts',
                'popularTags'
            )
        );
    }
}
