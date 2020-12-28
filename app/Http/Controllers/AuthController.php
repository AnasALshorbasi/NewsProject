<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request){

        $login_data = ['email' => $request->email, 'password' => $request->password];
        if (Auth::attempt($login_data)){
            return view('dashboard.dashboard');
        }

        return redirect()->back()->with('error','Error Email or Password');
    }

    public function logout(){
        if (Auth::check()){
            Auth::logout();
        }
        return redirect()->route('frontsite.home');
    }

    public function register(){
        return view('auth.register');
    }

    public function do_register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' =>'required|confirmed',

        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('success','user creatd successflly');
    }
}
