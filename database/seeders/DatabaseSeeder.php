<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        User::factory(5)->create();
        
        Category::create([
            'name' => 'web programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'web design',
            'slug' => 'web-design',
        ]);

        Post::factory(20)->create();

        //memasukan data ke db
        // User::create([
        //     'name' => 'Cahyo',
        //     'email' => 'cahyo@gmail.com',
        //     'password' => '123'
        // ]);

        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => '123'
        // ]);



        // //memasukan data postingan
        // Post::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'exceprt' => 'data 100 kata',
        //     'body' => 'data 1000 kata',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul kedua',
        //     'slug' => 'judul-kedua',
        //     'exceprt' => 'data 100 kata',
        //     'body' => 'data 1000 kata',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
