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
  #with eager loading
  // $posts = Post::with(['category', 'author'])->latest()->get(); 
  
  // dump(request('search'));
  
  #without eager loading
  // $posts = Post::latest(); 
  
  return view('posts', [
    'header' => 'Posts Page',
    'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString() 
  ]);
});

Route::get('/contact', function () {
  return view('contact', ['header' => 'Contact Page']);
});

Route::get('/authors/{user:username}', function (User $user) {
  #with eager loading
  // $post = $user->posts->load(['category', 'author']);

  #without eager loading
  $post = $user->posts;

  return view('posts', [ 
    'header' => count($post)." Posts by $user->name",
    'posts' => $post 
  ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
  #with eager loading
  // $post = $category->posts->load(['category', 'author']);

  #without eager loading
  $post = $category->posts;

  return view('posts', [
    'header' => "Posts by Category: $category->name",
    'posts' => $post
  ]);
});