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

    public function loan(){
        $loan=DB::table('loan_categories')
        ->orderBy('created_at','desc')
        ->take(2)
        ->get();
        return view('post.loan',compact('loan'));
    }

    public function loandetail($id){
       $loans=DB::table('loan_categories')->where('id',$id)->first();
       $recent = DB::table('loan_categories')
        ->orderBy('created_at', 'desc')
        ->take(2)
        ->get();

        return view('post.loan_detail',compact('loans','recent'));

    }
}
