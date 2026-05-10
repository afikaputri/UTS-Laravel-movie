<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $categories = Category::when($search, function ($query) use ($search) {
        $query->where('name', 'like', '%' . $search . '%')
        ->orWhere('slug', 'like', '%' . $search . '%');
        })->get();

        return view('categories.index', compact('categories'));
    }

    public function create()
{
    return view('categories.create');
}

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);

        return redirect('/categories')
            ->with('success', 'Category berhasil ditambahkan');
    }
}