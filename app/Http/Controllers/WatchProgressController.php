<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WatchProgress;

class WatchProgressController extends Controller
{
    public function saveProgress(Request $request)
{
    $validated = $request->validate([
        'movie_id' => 'required|exists:movies,id',
        'progress' => 'required|integer',
    ]);

    WatchProgress::updateOrCreate(
        ['user_id' => auth()->id(), 'movie_id' => $validated['movie_id']],
        ['progress' => $validated['progress']]
    );

    return response()->json(['message' => 'Progress saved successfully!']);
}
}
