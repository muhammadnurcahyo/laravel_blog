<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index(){
        return view('users', [
            "title"=>"posts",
            "users" => User::all()  //model post
        ]);
    }

    public function show(User $user){           //untuk menampilkan detail postingan, post dari web.php
        return view('user', [
            'name' => $user->name,
            'user' => $user
        ]);
    }
}
