<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Chaton Satria Yudhystira',
        //     'username' => 'ChatonSatria',
        //     'email' => 'chaton@gmail.com',
        //     'password' => bcrypt('password')
        // ]);
        //seeding sesuai dengan controller yang dituju berdasarkan factory masing-masing menggunakan faker
        User::factory(5)->create();
        Post::factory(20)->create();
        
        //Category::factory(4)->create();
        Category::create([
            'name' => 'WEB PROGRAMMING',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'WEB DESIGN',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'SPORTS',
            'slug' => 'sports'
        ]);
        Category::create([
            'name' => 'FASHION',
            'slug' => 'fashion'
        ]);
        Category::create([
            'name' => 'NATURE',
            'slug' => 'nature'
        ]);


    }
}
