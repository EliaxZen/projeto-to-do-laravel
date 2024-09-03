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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $data = $request->only('name','email', 'password');
        $user_created = User::create($data);
    }
}
