<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
  public function destroy(Comment $comment)
{
    $user = auth()->user();

    // Kullanıcı kendi yorumunu silebilir veya admin tüm yorumları silebilir
    if ($user->id === $comment->user_id || $user->isAdmin()) {
        $comment->delete();
        return redirect()->back()->with('success', 'Yorum başarıyla silindi.');
    }

    return redirect()->back()->with('error', 'Bu yorumu silme yetkiniz yok.');
}


}
