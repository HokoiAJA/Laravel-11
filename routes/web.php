<?php

use Illuminate\Support\Facades\Route;

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
    ]);
});

Route::get('/blog', function () {
$blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Abdi Putra Zulkarnain",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Abdi Putra Zulkarnain",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque."
    ]
    ];

    return view('posts', [
        'title' => "Posts",
        'posts' => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {
    return view('post', [
        'title'=> 'Single Post',
    ]);
});
