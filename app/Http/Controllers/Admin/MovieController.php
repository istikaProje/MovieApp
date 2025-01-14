<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('admin.movies.index', compact('movies'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.movies.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'vote_average' => 'nullable|numeric|min:0|max:10',
            'youtube_link' => 'nullable|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000', // Video doğrulama
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id', // Category doğrulama
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = Storage::disk('public')->put('uploads/images', $request->file('image'));
        }

        $videoPath = null;
        if ($request->hasFile('video')) {
            $videoPath = Storage::disk('public')->put('uploads/videos', $request->file('video'));
        }

        $movie = Movie::create([
            'title' => $request->title,
            'description' => $request->description,
            'vote_average' => $request->vote_average,
            'youtube_link' => $request->youtube_link,
            'image' => $imagePath,
            'video' => $videoPath,
        ]);

        $movie->categories()->sync($request->categories);

        return redirect()->route('admin.movies.index')->with('success', 'Movie added successfully.');
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        $categories = Category::all();
        return view('admin.movies.edit', compact('movie', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'vote_average' => 'nullable|numeric|min:0|max:10',
            'youtube_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000', // Video doğrulama
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id', // Category doğrulama
        ]);

        $movie = Movie::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($movie->image) {
                Storage::disk('public')->delete($movie->image);
            }
            $imagePath = Storage::disk('public')->put('uploads/images', $request->file('image'));
            $movie->image = $imagePath;
        }

        if ($request->hasFile('video')) {
            if ($movie->video) {
                Storage::disk('public')->delete($movie->video);
            }
            $videoPath = Storage::disk('public')->put('uploads/videos', $request->file('video'));
            $movie->video = $videoPath;
        }

        $movie->update([
            'title' => $request->title,
            'description' => $request->description,
            'vote_average' => $request->vote_average,
            'youtube_link' => $request->youtube_link,
            'image' => $movie->image,
            'video' => $movie->video,
        ]);

        $movie->categories()->sync($request->categories);

        return redirect()->route('admin.movies.index')->with('success', 'Movie updated successfully.');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect()->route('admin.movies.index')->with('success', 'Movie deleted successfully.');
    }
}