<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home', ['title' => 'Home']);
});


Route::get('/posts', function () {
    return view('pages.posts', [
        'title' => 'Blog',
        'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(5)->withQueryString()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('pages.post', [
        'title' => 'Single Post',
        'post' => $post,
    ]);
});

Route::get('/about', function () {
    return view('pages.about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('pages.contact', ['title' => 'Contact']);
});

Route::fallback(function(){
    return view('errors.404', ['title' => '???']);
});