<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('Halaman Home');
});

Route::get('/about', function () {
    return ('Halaman About');
});

Route::get('/blog', function () {
    return ('Halaman Blog');
});
