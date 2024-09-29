<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;


class PageController extends Controller
{

  public function show($id)
  {
    // Поиск поста по ID
    $post = Post::findOrFail($id);
    $comments = $post->comments()->paginate(5);
    $categories = Category::withCount('posts')->get();
    $latestPosts = Post::latest()->take(4)->get();
    // Передаем данные в представление
    return view('page.show', compact('post', 'categories', 'latestPosts', 'comments'));
  }
}
