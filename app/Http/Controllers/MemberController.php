<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index(){
      $townships = DB::table('townships')
    ->leftJoin('users', 'townships.id', '=', 'users.township_id')
    ->select('townships.id', 'townships.name', DB::raw('COUNT(users.id) as user_count'))
    ->groupBy('townships.id', 'townships.name')
    ->get();

        return view('members.member',compact('townships'));
    }
}
