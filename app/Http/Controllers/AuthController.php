<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function store(){
         $validated =request()->validate(
            [
                'name'=>'required',
                'email'=>'required|unique:users,email',
                'password'=>'required |confirmed|min:8|alpha_num'
            ]
         );
         user::create(
            [
                'name'=>$validated ['name'],
                'email'=>$validated ['email'],
                'password'=>Hash::make($validated ['password']),
            ]
         );
         return redirect()->route('home');
    }
}
