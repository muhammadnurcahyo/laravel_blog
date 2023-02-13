<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
       //
       public function index(){
        return view('home', [
            "title"=>"Posts",
            "home" => "home",
            "posts" => Post::latest()->get()  //model post, latest untuk menampilkan data terbaru di buat
        ]);
    }

    public function show(Post $post){           //untuk menampilkan detail postingan, post dari web.php
        return view('home', [
            "title"=>"wkwk",
            "post" => $post //model post
        ]);
    }
}
