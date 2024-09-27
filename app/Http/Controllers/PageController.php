<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;


class PageController extends Controller
{
  public function index()
  {
    return view('page.index');
  }
  public function show($id)
  {
    // Поиск поста по ID
    $post = Post::findOrFail($id); // Если пост не найден, выбрасывается исключение 404
    $categories = Category::withCount('posts')->get();
    $latestPosts = Post::latest()->take(4)->get();
    // Передаем данные в представление
    return view('page.show', compact('post', 'categories', 'latestPosts'));
  }
}
