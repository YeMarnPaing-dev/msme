<?php

namespace App\Http\Controllers;

use App\Models\Register;
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

        // dd($request->nrc_region_mm . '/' . $request->nrc_township_mm . '(' . $request->nrc_type_mm . ')' . $request->nrc_number_mm);

        $data = new Register();
        $data->name_mm = $request->name_mm;
        $data->name_eng = $request->name_eng;
        $data->nrc_card_mm =  $request->nrc_region_mm . '/' . $request->nrc_township_mm . '(' . $request->nrc_type_mm . ')' . $request->nrc_number_mm;
        $data->nrc_card_eng =  $request->nrc_region_eng . '/' . $request->nrc_township_eng . '(' . $request->nrc_type_eng . ')' . $request->nrc_number_eng;
        $data->father_name_mm = $request->father_name_mm;
        $data->father_name_eng = $request->father_name_eng;
        $data->ethinic = $request->ethinic;
        $data->religion = $request->religion;
        $data->education = $request->education;
        $data->education= $request->education;
        $data->gender = $request->gender;
        $data->birthday = $request->birthday;
        $data->township_id = $request->town;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->work_name_mm = $request->work_name_mm;
        $data->work_name_eng = $request->work_name_eng;
        $data->type_mm = $request->type_mm;
        $data->type_eng = $request->type_eng;
        $data->size = $request->size;
        $data->sector_id = $request->sector;
        $data->sector_type_id = $request->sector_type;
        $data->location_mm = $request->location_mm;
        $data->location_eng = $request->location_eng;
        $data->wide = $request->wide;
        $data->machine = $request->machine;
        $data->owner = $request->owner;
        $data->start_year = $request->start_year;
        $data->building = $request->building;
        $data->other = $request->other;
        $data->product = $request->product;
        $data->category = $request->category;
        $data->sale_product = $request->sale_product;
        $data->order_not = $request->order_not;
        $data->service = $request->service;
        $data->quantity = $request->quantity;
        $data->other_work = $request->other_work;
        $data->leader = $request->leader;
        $data->supervisor = $request->supervisor;
        $data->smart_worker = $request->smart_worker;
        $data->normal_worker = $request->normal_worker;
        $data->other_worker = $request->other_worker;
        $data->dept = $request->dept;
        $data->liscense = $request->liscense;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        $data->save();
        // dd($data->toArray());

        return redirect()->back()->with('success', 'Your Resgiration Form has been saved successfully!');

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
        // 'start_year' => 'required',
        'building' => 'required',
        'other' => 'required',
        // 'product' => 'required',
        // 'category' => 'required',
        // 'sale_product' => 'required',
        // 'order_not' => 'required',
        // 'service' => 'required',
        // 'quantity' => 'required',
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
