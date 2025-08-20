<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function create(){
        return view('contact.create');
    }

    public function store(Request $request){
          $validated = $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // DB::table('contacts')->insert([
    //     'name'=>$request->name,
    //     'email'=>$request->email,
    //     'subject'=>$request->subject,
    //     'message'=>$request->message
    // ]);
    DB::table('contacts')->insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'subject'=>$request->subject,
        'message'=>$request->message
    ]);

     return redirect()->back()->with('success', 'Your message has been saved successfully!');


    }


}
