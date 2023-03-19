<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index(){
        return view('login.register');
    }
    public function register(RegisterRequest $request){
        $request->all();
        $name=$request['name'];
        return view('home.home',compact('name'));
    }
}
