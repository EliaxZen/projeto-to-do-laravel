<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index(Request $request){
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('login');
    }

    public function login_action(Request $request){
        $request->validate([
            'email' =>'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        }

        return redirect()->back()->withInput($request->only('email'));
    }

    public function register(Request $request){
        $is_logged_in = Auth::check();
        if ($is_logged_in) {
            return redirect()->route('home');
        }
        return view('register');
    }

    public function register_action(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data = $request->only('name','email', 'password');

        $data['password'] = Hash::make($data['password']);

        User::create($data);


        return redirect(route('login'));
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
}
