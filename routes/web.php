<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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

//halaman categories
Route::get('/categories/', [CategoryController::class, 'index']);

// halaman categories
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

// halaman user
Route::get('/users/', [UserController::class, 'index']);

// halaman users
Route::get('/users/{users:slug}', [UserController::class, 'show']);


// halaman author
Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => 'user',
        'posts' => $author->posts
    ]);
});


//halaman about
Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
    ]);
});
