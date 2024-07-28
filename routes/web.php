<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('pages.about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('pages.posts', [
        'title' => 'Blog',
        'posts' => Post::all(),
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('pages.post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {

    return view('pages.posts', ['title' => count($user->posts) . ' Article by '. $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {

    return view('pages.posts', ['title' => ' Articles in: '. $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('pages.contact', ['title' => 'Contact']);
});
