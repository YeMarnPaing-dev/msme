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

    public function list($id){
       $township = DB::table('townships')->where('id', $id)->first();
       $users = DB::table('users')
    ->join('townships', 'users.township_id', '=', 'townships.id')
    ->where('townships.id', $id)
    ->select('users.*', 'townships.name as township_name')
    ->paginate(12);

       return view('members.list',compact('township','users'));
    }

    public function council(){
        return view('members.council');
    }
}
