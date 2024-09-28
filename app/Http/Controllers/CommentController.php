<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
  public function store(Request $request, $postId)
  {
    $request->validate([
      'content' => 'required|string|max:255',
    ]);

    $comment = new Comment();
    $comment->user_id = Auth::id();
    $comment->post_id = $postId;
    $comment->content = $request->input('content');
    $comment->save();

    return redirect()->back();
  }

  public function delete($id)
  {
    $comment = Comment::findOrFail($id);

    // Проверка на то, что пользователь - администратор или автор комментария
    if (Auth::user()->is_admin || Auth::id() === $comment->user_id) {
      $comment->delete();
      return redirect()->back();
    }

    return redirect()->back();
  }
}
