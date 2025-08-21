<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('register.login');
    }

    public function user(Request $request){
        $this->validateData($request);
          $user = DB::table('users')
            ->where('email', $request->email)
            ->orWhere('phone', $request->phone)
            ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Log user in using session
            Auth::loginUsingId($user->id);
            // return to_route('index#content')->with('success', 'You have successfully login!');
            return redirect()->back()->with('success', 'Your Resgiration Form has been saved successfully!');
        }

        return redirect()->back()->with('error', 'Credentail Do not match our records!');
    }

    private function validateData($request){
       return $request->validate([
              'email'=>'required|email',
              'phone'=>'required|max:12',
              'password'=>'required|min:6'
       ]);
    }

    public function logout(Request $request)
{
    Auth::logout(); // remove authentication
    $request->session()->invalidate(); // invalidate session
    $request->session()->regenerateToken(); // regenerate CSRF token

    return to_route('index#content')->with('success', 'You have successfully logout!');
}
}
