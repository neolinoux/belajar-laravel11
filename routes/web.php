<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['header' => 'Home Page']);
});


Route::get('/about', function () {
  return view('about', ['header' => 'About Page']);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
      [
        'id' => 1,
        'slug' => 'post-1',
        'title' => 'Post 1', 
        'author' => 'John Doe',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dicta neque tenetur sunt! Iste nostrum, molestias exercitationem architecto fuga vel nobis distinctio quis nihil perspiciatis eos voluptatum reiciendis sint temporibus.'
      ],
      [
        'id' => 2,
        'slug' => 'post-2',
        'title' => 'Post 2', 
        'author' => 'Jane Doe',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dicta neque tenetur sunt! Iste nostrum, molestias exercitationem architecto fuga vel nobis distinctio quis nihil perspiciatis eos voluptatum reiciendis sint temporibus.'
      ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
      return $post['slug'] == $slug;
    });

    return view('post', [
      'header' => 'Post Page',
      'post' => $post
    ]);
});

Route::get('/posts', function () {
  return view('posts', [
    'header' => 'Posts Page',
    'posts' => [
      [
        'id' => 1,
        'slug' => 'post-1',
        'title' => 'Post 1',
        'author' => 'John Doe',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dicta neque tenetur sunt! Iste nostrum, molestias exercitationem architecto fuga vel nobis distinctio quis nihil perspiciatis eos voluptatum reiciendis sint temporibus.'
      ],
      [
        'id' => 2,
        'slug' => 'post-2',
        'title' => 'Post 2',
        'author' => 'Jane Doe',
        'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem aspernatur omnis labore nesciunt nam? Inventore alias velit commodi minus, doloremque voluptates veritatis architecto, fuga dignissimos quaerat, eum quod molestiae repellat nam voluptate obcaecati? Facilis qui ut dolorum dolore error corrupti explicabo sit deserunt soluta ratione. Quo, qui cumque, sint animi aliquid maxime reiciendis doloremque, ipsa inventore quas autem omnis ipsum. Pariatur repellat facilis dolores unde? Sunt ex maxime culpa omnis at dignissimos tenetur quibusdam qui doloremque alias natus molestias, quo magni, vitae pariatur accusantium corrupti laborum voluptate totam illo. Repudiandae.'
      ],
    ]
  ]);
});

Route::get('/contact', function () {
  return view('contact', ['header' => 'Contact Page']);
});