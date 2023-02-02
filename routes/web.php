<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// untuk admin
Route::get('/admin', function () {
    return view('admin.home');
});

// ============================================================


// untuk frontend
Route::get('/', function () {
    return view('home', [
        'title' => 'home',
    ]);
});


// halaman posts
Route::get('/blog', function(){
    $blog_posts=[
        [
            "title" => "judul pertama",
            "slug"   => "judul-pertama",
            "author" => "andika",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quasi porro, modi adipisci recusandae quam ipsam corrupti, magnam assumenda maxime officiis veniam ut iure? Unde atque eum eaque reprehenderit at repudiandae consectetur assumenda mollitia fugit minus. Culpa ullam nostrum voluptate, dolor laborum nisi voluptatibus, expedita rerum officia, asperiores vero impedit pariatur nemo sint ab odio ipsa! Ipsam suscipit ullam tempore, in aperiam cupiditate sapiente alias quam pariatur laborum earum, odio eaque voluptatem molestias nisi ducimus rem temporibus atque magnam, nemo distinctio fugit ipsum? Molestias vel odit ad dignissimos quibusdam maxime, tenetur reiciendis consequuntur tempore libero nemo, dolores eveniet, ex rem."
        
        ],
        [
            "title" => "judul kedua",
            "slug"   => "judul-kedua",
            "author" => "andika",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quasi porro, modi adipisci recusandae quam ipsam corrupti, magnam assumenda maxime officiis veniam ut iure? Unde atque eum eaque reprehenderit at repudiandae consectetur assumenda mollitia fugit minus. Culpa ullam nostrum voluptate, dolor laborum nisi voluptatibus, expedita rerum officia, asperiores vero impedit pariatur nemo sint ab odio ipsa! Ipsam suscipit ullam tempore, in aperiam cupiditate sapiente alias quam pariatur laborum earum, odio eaque voluptatem molestias nisi ducimus rem temporibus atque magnam, nemo distinctio fugit ipsum? Molestias vel odit ad dignissimos quibusdam maxime, tenetur reiciendis consequuntur tempore libero nemo, dolores eveniet, ex rem."
        
        ],
    ];
    
    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});


// Route::get('/blogs/{id}', function($id){
//     return view('detailBlog',[
//         "title" => "single post"
//     ]);
// });


// halaman single post atau full blog
Route::get('/posts/{slug}', function ($slug) {
    return view('post', [
        'title' => 'single post',
    ]);
});



