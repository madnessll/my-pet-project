<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    return view('admin.category.index', compact('categories'));
  }


  public function create()
  {
    return view('admin.category.create');
  }

  public function store(CategoryRequest $request)
  {
    $data = $request->validated();

    Category::create($data);

    return redirect()->route('admin.category.index');
  }

  public function show(Category $category)
  {
    return view('admin.category.show', compact('category'));
  }


  public function edit(Category $category)
  {
    return view('admin.category.edit', compact('category'));
  }

  public function update(CategoryRequest $request, Category $category)
  {
    $data = $request->validated();
    $category->update($data);
    return redirect()->route("admin.category.show", $category->id);
  }

  public function delete(Category $category)
  {
    $category->delete();
    return redirect()->route('admin.category.index');
  }
}
