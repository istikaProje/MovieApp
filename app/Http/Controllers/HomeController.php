<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliderMovies = Movie::inRandomOrder()->take(5)->get(); // Rastgele 5 film al
        return view('home.index', compact('sliderMovies'));
    }
}
