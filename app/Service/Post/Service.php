<?php

namespace App\Service\Post;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data)
    {
        if (isset($data['tag_ids'])) {
            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);
        }

        $data['preview_image'] = Storage::disk('public')->put('/posts/images', $data['preview_image']);
        $data['main_image'] = Storage::disk('public')->put('/posts/images', $data['main_image']);

        $post = Post::firstOrCreate($data);

        if (isset($tagIds)) {
            $post->tags()->attach($tagIds);
        }
    }

    public function update($data, $post)
    {
        try {
            DB::beginTransaction();

            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);

            if (isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/posts/images', $data['preview_image']);
            }
            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/posts/images', $data['main_image']);
            }

            $post->update($data);
            $post->tags()->sync($tagIds);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $post;
    }
}
