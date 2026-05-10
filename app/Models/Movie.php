<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'director',
        'release_year',
        'rating',
        'synopsis',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}