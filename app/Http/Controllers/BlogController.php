<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{ //for showing all post
    public function index()
    {
        return view('blog');
    }

    //for showing single post
    public function show()
    {
        return view('single-blog-post');
    }

    
}
