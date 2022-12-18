<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Category::factory(10)->create([
            'title' => 'Category title',
        ]);

        \App\Models\Movie::factory(10)->create([
            'category_id' => 1,
            'title' => 'Movie title',
            'description' => 'description',
            'rate' => 5 ,
            'img' => "image.png" ,
        ]);
    }
}
