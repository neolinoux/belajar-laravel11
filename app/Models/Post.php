<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
  protected $fillable = ['title', 'slug', 'author', 'body'];

  protected $with = ['category', 'author'];

  public function author() : BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function category() : BelongsTo
  {
    return $this->belongsTo(Category::class);
  }

    use HasFactory;
}
