<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Hash;

class RegisterController extends Controller
{
    public function index() {
        return view("auth.register");
    }

    public function store(Request $request) {



        $this->validate($request,[
           'name' => 'required|max:255',
           'email' => 'required|email',
           'tele' => 'required',
           'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'tele' => $request->tele,
            'password' => Hash::make($request->password),
        ]);

//        dd(Auth::attempt(
//            ['email' => $request->email , 'password' => $request->password]));

        if (Auth::attempt(
            ['email' => $request->email , 'password' => $request->password])) {

            return redirect()->route("Dashboard");
        }



    }
}
