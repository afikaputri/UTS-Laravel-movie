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

    public function create()
    {
        $categories = Category::all();

        return view('movies.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Movie::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'director' => $request->director,
            'release_year' => $request->release_year,
            'rating' => $request->rating,
            'synopsis' => $request->synopsis,
        ]);

        return redirect('/movies')
            ->with('success', 'Movie berhasil ditambahkan');
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);

        $categories = Category::all();

        return view('movies.edit', compact('movie', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);

        $movie->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'director' => $request->director,
            'release_year' => $request->release_year,
            'rating' => $request->rating,
            'synopsis' => $request->synopsis,
        ]);

        return redirect('/movies')
            ->with('success', 'Movie berhasil diupdate');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);

        $movie->delete();

        return redirect('/movies')
            ->with('success', 'Movie berhasil dihapus');
    }
}
