<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showPage(){
        return view('login.register');
    }
    public function register(Request $request){
        $request->validate([
            'name' => ['required','string'],
            'email' =>['required','email'],
            'password' => ['required','min:8','confirmed'],
            'password_confirmation' =>['required']
        ]);
        $name=$request['name'];
        return view('home.home',compact('name'));
    }
}
