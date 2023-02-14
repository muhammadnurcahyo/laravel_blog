<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index(){

        //pencarian
        $posts = Post::latest();

        if(request('search')){
            $posts->where('title', 'like', '%' . request('search') . '%');
        }

        // dd(request('search'));
        return view('posts', [
            "title"=>"All Posts",
            "posts" => $posts->get()  //model post, latest untuk menampilkan data terbaru di buat,
            // with(untuk menyingkat query biar webnya bisa lebih kecepatan loading )
        ]);
    }

    public function show(Post $post){           //untuk menampilkan detail postingan, post dari web.php
        return view('post', [
            "title"=>"Single Post",
            "post" => $post //model post
        ]);
    }
}
