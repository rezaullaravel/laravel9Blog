<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_title' => fake()->name(),
            'post_slug' => Str::slug(fake()->name),
            'post_image'=>fake()->imageUrl($width=770, $height=340),
            'post_description'=>fake()->text(700),
            'category'=>Category::factory()->create()->id,
            'user_id'=>1,
        ];
    }
}
