<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComettieController extends Controller
{
 public function cmt(){
    $cmt = DB::table('cmt')->get();
return view('cometties.comettie',compact('cmt'));
    }

    public function about(){
        return view('cometties.about');
    }
}
