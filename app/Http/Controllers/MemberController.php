<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index(){
        $township = DB::table('townships')->get('name');
        return view('members.member',compact('township'));
    }
}
