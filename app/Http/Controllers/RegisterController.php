<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index(){
        $township= DB::table('townships')->get();
        $sectors = DB::table('enterprise_sectors')->get();
        $types = DB::table('enterprise_types')->get();
        return view('register.index',compact('township','sectors','types'));
    }

    public function create(Request $request){
        $this->validateData($request);



    }

    private function validateData($request){
         return $request->validate([
        'name_mm' => 'required',
        'name_eng' => 'required',
        'father_name_mm' => 'required',
        'father_name_eng' => 'required',
        'ethinic' => 'required',
        'religion' => 'required',
        'education' => 'required',
        'gender' => 'required',
        'birthday' => 'required',
        'town' => 'required',
        'address' => 'required',
        'phone' => 'required|max:12',
        'email' => 'required|email',
        'work_name_mm' => 'required',
        'work_name_eng' => 'required',
        'type_mm' => 'required',
        'type_eng' => 'required',
        'size' => 'required',
        'machine'=>'required',
        'sector' => 'required',
        'sector_type' => 'required',
        'location_mm' => 'required',
        'location_eng' => 'required',
        'wide' => 'required',
        'owner' => 'required',
        'start_year' => 'required',
        'building' => 'required',
        'other' => 'required',
        'product' => 'required',
        'category' => 'required',
        'sale_product' => 'required',
        'order_not' => 'required',
        'service' => 'required',
        'quantity' => 'required',
        'other_work' => 'required',
        'leader' => 'required',
        'supervisor' => 'required',
        'smart_worker' => 'required',
        'normal_worker' => 'required',
        'other_worker' => 'required',
        'dept' => 'required',
        'liscense' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'nrc_township_mm' => 'required',
        'nrc_township_eng' => 'required',
        'nrc_number_mm' => 'required',
        'nrc_number_eng' => 'required',
    ]);
    }
}
