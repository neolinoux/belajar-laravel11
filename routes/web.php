<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['header' => 'Home Page']);
});


Route::get('/about', function () {
  return view('about', ['header' => 'About Page']);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    // $post = Post::where('slug', $slug)->first();

    return view('post', [
        'header' => 'Post Page',
        'post' => $post
    ]);
});

Route::get('/posts', function () {
  return view('posts', [
    'header' => 'Posts Page',
    'posts' => Post::all()
  ]);
});

Route::get('/contact', function () {
  return view('contact', ['header' => 'Contact Page']);
});

Route::get('/authors/{user:username}', function (User $user) {
  return view('posts', [ 
    'header' => count($user->posts)." Posts by $user->name",
    'posts' => $user->posts 
  ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
  return view('posts', [
    'header' => "Posts by Category: $category->name",
    'posts' => $category->posts
  ]);
});