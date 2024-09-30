<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // Получаем поисковый запрос
        $query = $request->input('query');

        // Ищем посты, название которых содержит поисковый запрос
        $posts = Post::where('title', 'LIKE', "%{$query}%")->get();

        // Возвращаем вид с результатами поиска
        return view('search.index', compact('posts', 'query'));
    }
}
