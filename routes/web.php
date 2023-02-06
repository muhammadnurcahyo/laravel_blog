<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
Route::get('/blog', [PostController::class, 'index']);

// halaman single post atau full blog
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


//halaman about
Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
    ]);
});
