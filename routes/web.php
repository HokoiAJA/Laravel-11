<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Abdi Putra ZUlkarnain",
        "email"=> "mhdabdikc123@gmail.com",
        "image" => "Hokoi.png"
    ]);
});

Route::get('/posts', [PostController::class, 'index'] );

// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
