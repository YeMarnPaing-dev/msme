<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
      $posts = DB::table('posts')
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
        return view('post.posts',compact('posts'));
    }

    public function detail($id){
$posts=DB::table('posts')->where('id',$id)->first();

  $recent = DB::table('posts')
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();
return view('post.detail',compact('posts','recent'));
    }
}
