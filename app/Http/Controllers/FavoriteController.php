<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        // Önce kontrolü yapalım
        $exists = Favorite::where('user_id', auth()->id())
                         ->where('movie_id', $request->movie_id)
                         ->exists();

        if ($exists) {
            return response()->json(['success' => false, 'message' => 'Bu içerik zaten favorilerinize eklenmiş!']);
        }

        Favorite::create([
            'user_id' => auth()->id(),
            'movie_id' => $request->movie_id,
            'image_url' => $request->image_url
        ]);

        return response()->json(['success' => true, 'message' => 'Film favorilerinize eklendi!']);
    }

    public function index()
    {
        $favorites = Favorite::where('user_id', auth()->id())
            ->orderBy('created_at', 'asc')  // En son eklenen en sona gelecek
            ->get();
        return view('layouts.favoritesList', compact('favorites'));
    }

    public function destroy($id)
    {
        Favorite::where('id', $id)->delete();
        return redirect()->back();
    }
}



