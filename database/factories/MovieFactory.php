<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),

            'title' => fake()->sentence(2),
            'director' => fake()->name(),
            'release_year' => fake()->year(),
            'rating' => fake()->randomFloat(1, 1, 10),
            'synopsis' => fake()->paragraph(),
        ];
    }
}