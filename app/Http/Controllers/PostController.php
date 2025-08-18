<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('post.posts');
    }

    public function detail(){
        return view('post.detail');
    }
}
