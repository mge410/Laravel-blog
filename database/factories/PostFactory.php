<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(20),
            'content' => $this->faker->text,
            'main_image' => $this->faker->imageUrl(),
            'preview_image' => $this->faker->imageUrl(),
            'category_id' => Category::get()->random()->id
        ];
    }
}
