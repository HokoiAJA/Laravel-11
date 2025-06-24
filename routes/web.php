<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Abdi Putra ZUlkarnain",
        "email" => "mhdabdikc123@gmail.com",
        "image" => "Hokoi.png"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

route::get('/login', [LoginController::class, 'index'])->name('login');
