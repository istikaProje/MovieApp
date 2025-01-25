<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Favorite;
use Illuminate\Http\Request;
use App\Models\WatchProgress;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
{
    // Kullanıcının favori filmleri
    $favorites = Favorite::with(['movie' => function($query) {
        $query->select('id', 'title', 'vote_average', 'description', 'image', 'poster');
    }])->where('user_id', Auth::id())->get();

    // Slider için rastgele filmler
    $sliderMovies = Movie::inRandomOrder()->take(5)->get();

    // Kullanıcının izlemeye devam ettiği filmler
    $continueWatching = WatchProgress::with(['movie' => function($query) {
        $query->select('id', 'title', 'vote_average', 'description', 'image', 'poster'); // Movie tablosundan gerekli sütunlar
    }])
    ->where('user_id', Auth::id()) // Kullanıcıya göre filtrele
    ->get();

    $currentMovieProgress = WatchProgress::where('user_id', Auth::id())
        ->where('movie_id', request()->movie_id) // Mevcut film ID'sine göre ilerlemeyi al
        ->value('progress');

        return view('home.index', compact('favorites', 'sliderMovies', 'continueWatching', 'currentMovieProgress'));
}
}
