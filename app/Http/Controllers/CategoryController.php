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
        })->paginate(3);

        return view('categories.index', compact('categories'));
    }
}