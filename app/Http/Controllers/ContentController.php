<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function index(){
        $comettie = DB::table('cmt')->get('cmt_name');
        $sliders = DB::table('sliders')->get();
        return view('home.content',compact('comettie','sliders'));
    }
}
