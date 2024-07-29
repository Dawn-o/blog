<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home', ['title' => 'Home']);
});


Route::get('/posts', function () {
    return view('pages.posts', [
        'title' => 'Blog',
        'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->get(),
    ]);
});

Route::get('/about', function () {
    return view('pages.about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('pages.contact', ['title' => 'Contact']);
});
