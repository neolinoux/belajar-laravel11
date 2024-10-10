<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['header' => 'Home Page']);
});


Route::get('/about', function () {
  return view('about', ['header' => 'About Page']);
});

Route::get('/posts/{slug}', function ($slug) {
    $post = Post::find($slug);

    return view('post', [
        'header' => 'Post Page',
        'post' => $post
    ]);
});

Route::get('/posts', function () {
  return view('posts', [
    'header' => 'Posts Page',
    'posts' => Post::getAllPost()
  ]);
});

Route::get('/contact', function () {
  return view('contact', ['header' => 'Contact Page']);
});