<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;


Route::get('/', [MainController::class, 'index'])->name('main.index');




Route::get('/page/{id}', [PageController::class, 'show'])->name('page.show');


Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
  Route::get('/', [AdminController::class, 'index'])->name('admin');


  Route::get('/posts', [PostController::class, 'index'])->name('admin.post.index');
  Route::get('/posts/create', [PostController::class, 'create'])->name('admin.post.create');
  Route::post('/posts', [PostController::class, 'store'])->name('admin.post.store');
  Route::get('/posts/{post}', [PostController::class, 'show'])->name('admin.post.show');
  Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.post.edit');
  Route::patch('/posts/{post}', [PostController::class, 'update'])->name('admin.post.update');
  Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('admin.post.delete');


  Route::get('/categories', [CategoryController::class, 'index'])->name('admin.category.index');
  Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.category.create');
  Route::post('/categories', [CategoryController::class, 'store'])->name('admin.category.store');
  Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
  Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
  Route::patch('/categories/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
  Route::delete('/categories/{category}', [CategoryController::class, 'delete'])->name('admin.category.delete');


  Route::get('/users', [UserController::class, 'index'])->name('admin.user.index');
  Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
  Route::patch('/users/{user}', [UserController::class, 'update'])->name('admin.user.update');
});


Route::get('/kek', function () {
  return view('welcome');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
