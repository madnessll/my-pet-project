<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;

class PostController extends Controller
{
  public function index()
  {
    return view('admin.post.index');
  }


  public function create()
  {
    return view('admin.post.create');
  }

  public function store(StoreRequest $request)
  {
    $data = $request->validated();
    
    return redirect()->route("admin.post.index");
  }
}
