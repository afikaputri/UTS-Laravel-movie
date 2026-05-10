<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        Movie::create([
            'category_id' => 1,
            'title' => 'Avengers Endgame',
            'director' => 'Anthony Russo',
            'release_year' => 2019,
            'rating' => 9,
            'synopsis' => 'Film superhero Marvel'
        ]);

        Movie::create([
            'category_id' => 2,
            'title' => 'Warkop DKI',
            'director' => 'Arizal',
            'release_year' => 1980,
            'rating' => 8,
            'synopsis' => 'Film comedy legendaris'
        ]);

        Movie::create([
            'category_id' => 3,
            'title' => 'Pengabdi Setan',
            'director' => 'Joko Anwar',
            'release_year' => 2017,
            'rating' => 9,
            'synopsis' => 'Film horror Indonesia'
        ]);
    }
}