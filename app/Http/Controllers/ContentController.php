<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function index(){
        $comettie = DB::table('cmt')->get('cmt_name');
        return view('home.content',compact('comettie'));
    }
}
