<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display the specified category and its movies.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $movies = $category->movies; // Assuming you have a relationship set up in your models
        return view('category.show', compact('category', 'movies'));
    }
}
