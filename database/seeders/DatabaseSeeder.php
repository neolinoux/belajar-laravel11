<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::factory()->create([
        //   'name' => fake()->name(),
        //   'username' => fake()->userName(),
        //   'email' => fake()->email(),
        //   'email_verified_at' => now(),
        //   'password' => Hash::make('password'),
        //   'remember_token' => Str::random(10),
        // ]);

        // Category::factory()->create([
        //   'name' => fake()->sentence(rand(1, 3), false),
        //   'slug' => Str::slug(fake()->sentence(rand(1, 3), false)),
        // ]);

        // Post::factory()->create([
        //   'title' => fake()->sentence(rand(1, 3), false),
        //   'slug' => Str::slug(fake()->sentence(rand(1, 3), false)),
        //   'author_id' => User::first()->id,
        //   'category_id' => Category::first()->id,
        //   'body' => fake()->paragraphs(rand(3, 7), true),
        // ]);

        $this->call([
            UserSeeder::class,
            CategorySeeder::class
        ]);

        Post::factory(100)->recycle(
          Category::all(),
          User::all()
        )->create();
    }
}
