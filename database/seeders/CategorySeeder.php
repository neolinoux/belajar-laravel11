<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
            'color' => 'red',
        ]);
        
        Category::create([
            'name' => 'React',
            'slug' => 'react',
            'color' => 'green',
        ]);

        Category::create([
            'name' => 'Viu',
            'slug' => 'viu',
            'color' => 'blue',
        ]);
    }
}
