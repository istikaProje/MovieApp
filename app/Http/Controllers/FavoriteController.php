<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Favorite;
use Illuminate\Http\Request;
use App\Models\WatchProgress;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Favorite::where('user_id', Auth::id())->get();
        return view('layouts.favoritesList', compact('favorites'));
    }

    public function home()
{
    $favorites = Favorite::with(['movie' => function($query) {
        $query->select('id', 'title', 'vote_average', 'description', 'image', 'poster');
    }])->where('user_id', Auth::id())->get();

    $sliderMovies = Movie::inRandomOrder()->take(5)->get();

    $continueWatching = WatchProgress::with(['movie' => function($query) {
        $query->select('id', 'title', 'vote_average', 'description', 'image', 'poster');
    }])
    ->where('user_id', Auth::id())
    ->get();

    // Şu anki filmin ilerlemesi
    $currentMovieProgress = WatchProgress::where('user_id', Auth::id())
        ->where('movie_id', request()->movie_id) // Mevcut film ID'sine göre ilerlemeyi al
        ->value('progress');

    return view('home.index', compact('favorites', 'sliderMovies', 'continueWatching', 'currentMovieProgress'));
}

    public function toggle(Request $request)
    {
        $favorite = Favorite::where('user_id', Auth::id())
                            ->where('movie_id', $request->movie_id)
                            ->first();

        if ($favorite) {
            $favorite->delete();
            return response()->json(['status' => 'removed']);
        } else {
            Favorite::create([
                'user_id' => Auth::id(),
                'movie_id' => $request->movie_id,
                'image' => $request->image,
                'poster' => $request->poster,
            ]);
            return response()->json(['status' => 'added']);
        }
    }

    public function destroy($id)
    {
        $favorite = Favorite::findOrFail($id);
        $favorite->delete();
        return redirect()->route('favorites.index')->with('success', 'Favorite removed successfully');
    }
}



