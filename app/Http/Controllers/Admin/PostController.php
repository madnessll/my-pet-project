<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Post\PostRequest;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::all();
    return view('admin.post.index', compact('posts'));
  }


  public function create()
  {
    $categories = Category::all();
    return view('admin.post.create', compact('categories'));
  }



  public function store(PostRequest $request)
  {
    $data = $request->validated();

    if ($request->hasFile('image')) {
      $path = $request->file('image')->store('images', 'public');
      $data['image'] = $path;
    }

    Post::create($data);
    
    return redirect()->route("admin.post.index");
  }



  public function show(Post $post)
  {
    return view('admin.post.show', compact('post'));
  }



  public function edit(Post $post)
  {
    $categories = Category::all();
    return view('admin.post.edit', compact('post', 'categories'));
  }
  


  public function update(PostRequest $request, Post $post)
  {
    $data = $request->validated();
    if ($request->hasFile('image')) {
      if ($post->image) {
        Storage::disk('public')->delete($post->image);
      }
      $path = $request->file('image')->store('images', 'public');
      $data['image'] = $path;
    }

    $post->update($data);
    return redirect()->route("admin.post.show", $post->id);
  }
  


  public function delete(Post $post)
    {
    Storage::disk('public')->delete($post->image);
    $post->delete();
    return redirect()->route('admin.post.index');
    }
}

