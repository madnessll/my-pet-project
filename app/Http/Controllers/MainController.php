<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

class MainController extends Controller
{
  public function index()
  { 
    $randomPost = Post::inRandomOrder()->first();
    $randomPosts = Post::inRandomOrder()->take(4)->get();
    $categories = Category::withCount('posts')->get();
    $latestPosts = Post::latest()->take(4)->get();
    return view('main.index', compact('categories', 'randomPost', 'latestPosts', 'randomPosts'));
  }
}
