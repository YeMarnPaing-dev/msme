<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function shop(Request $request){
        $townships = DB::table('townships')->get();
        $shops = DB::table('shops')
        ->when($request->township_id, function($query) use ($request) {
            return $query->where('township_id', $request->township_id);
        })
        ->paginate(12)
        ->appends($request->all());
        return view('shops.shop',compact('townships','shops'));
    }
}
