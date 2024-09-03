<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index(Request $request){
        return view('login');
    }

    public function register(Request $request){
        
        return view('register');
    }

    public function register_action(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data = $request->only('name','email', 'password');
        User::create($data);


        return redirect(route('login'));
    }
}
