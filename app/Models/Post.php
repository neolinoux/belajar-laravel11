<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
  public static function getAllPost() {
    return [
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
  }

  public static function find($slug) {
    // return Arr::first(static::getAllPost(), fn($post) => $post['slug'] === $slug);

    $post = Arr::first(static::getAllPost(), function ($post) use ($slug) {
      return $post['slug'] === $slug;
    });

    if (!$post) {
      abort(404);
    }

    return $post;
  }

  use HasFactory;
}