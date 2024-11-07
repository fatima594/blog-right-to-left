<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Category; // تأكد من استيراد فئة Category
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'category_id' => Category::inRandomOrder()->first()->id, // الحصول على ID فئة عشوائية
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl,
        ];
    }
}
