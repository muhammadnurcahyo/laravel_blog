<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        return view('categories', [
            'title' => 'post categories',
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category){           //untuk menampilkan detail postingan, post dari web.php
        return view('category', [
            'title' => $category->name,
            'posts' => $category->posts,
            'category' => $category->name
        ]);
    }
}
