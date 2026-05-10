<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $category = $request->category;

        $movies = Movie::with('category')

            ->when($search, function ($query) use ($search) {

                $query->where('title', 'like', '%' . $search . '%');

            })

            ->when($category, function ($query) use ($category) {

                $query->where('category_id', $category);

            })

            ->paginate(5);

        $categories = Category::all();

        return view('movies.index', compact('movies', 'categories'));
    }
}