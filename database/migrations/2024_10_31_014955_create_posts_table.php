<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('posts', function (Blueprint $table) {
      $table->id('post_id');
      $table->foreignId('author_id')->constrained(
        'users',
        'id'
      );
      $table->string('title');
      $table->string('slug')->unique();
      $table->text('body');
      $table->timestamps();

      // FK
      // $table->unsignedBigInteger('author_id');
      // $table->foreign('author_id')->references('user_id')->on('users');

    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('posts');
  }
};
