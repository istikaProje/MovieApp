<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\WatchProgress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MoviesController extends Controller
{
    public function index(Request $request)
    {
        $category_id = $request->query('category', 'all');
        $categories = Category::all();

        $query = Movie::query();

        if ($category_id !== 'all') {
            $query->whereHas('categories', function ($q) use ($category_id) {
                $q->where('category_id', $category_id);
            });
        }

        $movies = $query->paginate(12); // Adjust the number of items per page as needed

        return view('movies.index', compact('movies', 'categories', 'category_id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|array',
            'category_id.*' => 'exists:categories,id',
            'youtube_link' => 'required|string',
            'description' => 'required|string|max:1000|min:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'video' => 'required|mimes:mp4,mov,ogg,qt',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            // ...other validation rules...
        ]);

        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->youtube_link = $request->input('youtube_link');
        $movie->description = $request->input('description');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $movie->image = $imagePath;
        }

        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('videos', 'public');
            $movie->video = $videoPath;
        }

        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('posters', 'public');
            $movie->poster = $posterPath;
        }

        $movie->save();

        if ($request->has('category_id')) {
            $movie->categories()->sync($request->input('category_id'));
        }

        return redirect()->route('movies.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|array',
            'category_id.*' => 'exists:categories,id',
            'youtube_link' => 'required|string',
            'description' => 'required|string|max:1000|min:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            // ...other validation rules...
        ]);

        $movie = Movie::findOrFail($id);
        $movie->title = $request->input('title');
        $movie->youtube_link = $request->input('youtube_link');
        $movie->description = $request->input('description');

        if ($request->hasFile('image')) {
            if ($movie->image) {
                Storage::disk('public')->delete($movie->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $movie->image = $imagePath;
        }

        if ($request->hasFile('video')) {
            if ($movie->video) {
                Storage::disk('public')->delete($movie->video);
            }
            $videoPath = $request->file('video')->store('videos', 'public');
            $movie->video = $videoPath;
        }

        if ($request->hasFile('poster')) {
            if ($movie->poster) {
                Storage::disk('public')->delete($movie->poster);
            }
            $posterPath = $request->file('poster')->store('posters', 'public');
            $movie->poster = $posterPath;
        }

        $movie->save();

        if ($request->has('category_id')) {
            $movie->categories()->sync($request->input('category_id'));
        }

        return redirect()->route('movies.index');
    }

    public function show($id)
    {
        $movie = Movie::with('comments.user', 'categories')->findOrFail($id);
        $recommendedMovies = Movie::whereHas('categories', function ($query) use ($movie) {
            return $query->whereIn('categories.id', $movie->categories->pluck('id'));
        })->where('movies.id', '!=', $movie->id)->get();

        return view('movies.show', compact('movie', 'recommendedMovies'));
    }

    public function watch(Movie $movie)
{
    // Kullanıcının izleme ilerlemesini al
    $progress = WatchProgress::where('movie_id', $movie->id)
        ->where('user_id', Auth::id()) // Kullanıcıya göre filtrele
        ->value('progress'); // Sadece progress sütununu al

    // Eğer progress bilgisi yoksa 0 döndür
    $progress = $progress ?? 0;

    return view('movies.watch', compact('movie', 'progress'));
}

    public function addComment(Request $request, $movieId)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        Comment::create([
            'content' => $request->content,
            'movie_id' => $movieId,
            'user_id' => auth()->id(), // Kullanıcıyı al
        ]);

        return redirect()->back()->with('success', 'Yorum başarıyla eklendi!');
    }


}
