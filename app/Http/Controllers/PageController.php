<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;


class PageController extends Controller
{

  public function show($id)
  {
    // Поиск поста по ID
    $post = Post::findOrFail($id);
    $comments = $post->comments()->paginate(5);
    $categories = Category::withCount('posts')->get();
    $latestPosts = Post::latest()->take(4)->get();
    $latestComments = Comment::with('user', 'post')
    ->orderBy('created_at', 'desc')
    ->take(5)
      ->get();
    return view('page.show', compact('post', 'categories', 'latestPosts', 'comments', 'latestComments'));
  }
}
