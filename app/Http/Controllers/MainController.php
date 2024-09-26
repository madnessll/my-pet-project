<?php

namespace App\Http\Controllers;

use App\Models\Category;

class MainController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    return view('main.index', compact('categories'));
  }
}
