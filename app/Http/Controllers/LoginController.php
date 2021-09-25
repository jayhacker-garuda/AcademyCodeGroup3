<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {

        return view("auth.login");

    }

    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(
            ['email' => $request->email , 'password' => $request->password])) {
            if(Auth::user()->is_admin){
                return redirect()->route('Admin');
            }
            return redirect()->route('Dashboard');
        }
        return redirect()->back()->with('login_status','Invalid Credentials');
    }
}
