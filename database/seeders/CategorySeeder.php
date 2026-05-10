<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Action',
            'slug' => 'action',
            'description' => 'Film action terbaik'
        ]);

        Category::create([
            'name' => 'Comedy',
            'slug' => 'comedy',
            'description' => 'Film comedy lucu'
        ]);

        Category::create([
            'name' => 'Horror',
            'slug' => 'horror',
            'description' => 'Film horror menegangkan'
        ]);
    }
}