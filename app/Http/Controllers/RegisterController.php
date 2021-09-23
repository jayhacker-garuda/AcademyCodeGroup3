<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class RegisterController extends Controller
{
    public function index() {
        return view("auth.register");
    }

    public function store(Request $request) {

//        dd($request->all());

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


    }
}
