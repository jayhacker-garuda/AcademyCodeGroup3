<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Faker\Provider\Address;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){

        $userInfo = User::find(Auth::id());

//        dd($userInfo);

        return view("auth.profile",compact('userInfo'));
    }

    public function updateProfile(Request $request){

//        dd($request->all());


        $this->validate($request,[
            'name' => 'required|max:255',
            'tele' => 'required',
        ]);

        User::find(Auth::id())->update([
            'name' => $request->name,
            'tele' => $request->tele,
        ]);

        return redirect()->back()->with('update_status','Update Successful');

    }
}
