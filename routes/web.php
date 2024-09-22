<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\AdminController;


Route::get('/', [MainController::class, 'index'])->name('main.index');


Route::get('/news', [NewsController::class, 'index'])->name('news.index');


Route::get('/page', [PageController::class, 'index'])->name('page.index');


Route::group(['prefix' => 'admin'], function () {
  Route::get('/', [AdminController::class, 'index']);

  Route::get('/posts', [PostController::class, 'index'])->name('admin.post.index');
  Route::get('/posts/create', [PostController::class, 'create'])->name('admin.post.create');
  // Route::post('/posts', [PostController::class, 'store']);
  // Route::get('/posts{post}', [PostController::class, 'show']);
  // Route::get('/posts{post}/edit', [PostController::class, 'edit']);
  // Route::put('/posts{post}', [PostController::class, 'update']);
  // Route::delete('/posts{post}', [PostController::class, 'delete']);
});