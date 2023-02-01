<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return view('blogs', [
            "title"=>"blogs",
            "blogs" => Post::all()  //model post
        ]);
    }

    public function show($slug){
        return view('blog', [
            "title"=>"Single Post",
            "blog" => Post::find($slug)  //model post
        ]);
    }
}
