<?php

namespace Database\Factories\News;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News\News>
 */
class NewsFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'content' => fake()->text(),
            'category_id' => fake()->numberBetween(1, 10),
        ];
    }
}
