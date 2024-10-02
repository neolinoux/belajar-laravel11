<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['header' => 'Home Page']);
});


Route::get('/about', function () {
  return view('about', ['header' => 'About Page']);
});

Route::get('/blog', function () {
  return view('blog', ['header' => 'Blog Page']);
});

Route::get('/contact', function () {
  return view('contact', ['header' => 'Contact Page']);
});