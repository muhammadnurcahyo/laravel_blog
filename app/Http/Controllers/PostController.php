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
            "posts" => Post::all()  //model post
        ]);
    }

    public function show($id){
        return view('posts', [
            "title"=>"Detail Blog",
            "posts" => Post::find($id)  //model post
        ]);
    }
}
