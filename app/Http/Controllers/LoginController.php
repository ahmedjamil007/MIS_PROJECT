<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function authenticate(){
      
         $validated =request()->validate(
[

                'email'=>'required',
                'password'=>'required'
]
         );
         if(auth()->attempt($validated)){
            request()->session()->regenerate();
            return redirect()->route('home')->with('success','Logged in susscessfully');
         }
        
         return redirect()->route('login')->withErrors([
            'email'=>"no mathing"
         ]);
    }
    public function logout(){
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('home')->with('success','LoggOUT in susscessfully');
    }
}
