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
      $users = DB::table('councils')
    ->leftJoin('users', 'councils.user_id', '=', 'users.id')
    ->leftJoin('designations', 'councils.designation_id', '=', 'designations.id')
    ->select(
        'councils.*',
        'users.name_mm as user_name',
        'designations.designation as designation_name'
    )
    ->where('councils.designation_id', '!=', 1) // exclude designation_id = 1
    ->paginate(5); // paginate 4 per page


    $president = DB::table('councils')
    ->leftJoin('users', 'councils.user_id', '=', 'users.id')
    ->leftJoin('designations', 'councils.designation_id', '=', 'designations.id')
    ->select(
        'councils.*',
        'users.name_mm as name',
        'designations.designation as designation_name'
    )
    ->where('councils.designation_id', 1) // filter by designation_id = 1
    ->first();


        return view('members.council',compact('users','president'));
    }
}
