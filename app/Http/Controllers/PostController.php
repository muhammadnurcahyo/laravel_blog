<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return view('posts', [
            "title"=>"posts",
            "posts" => Post::latest()->get()  //model post, latest untuk menampilkan data terbaru di buat
        ]);
    }

    public function show(Post $post){           //untuk menampilkan detail postingan, post dari web.php
        return view('post', [
            "title"=>"wkwk",
            "post" => $post //model post
        ]);
    }
}
