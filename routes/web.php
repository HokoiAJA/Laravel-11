<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',
        [
            "title" => "home",
        ]
    );
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Abdi Putra ZUlkarnain",
        "email"=> "mhdabdikc123@gmail.com",
    ]);
});

Route::get('/blog', function () {
    return view('posts',[
        'title'=> 'posts',
    ]);
});
