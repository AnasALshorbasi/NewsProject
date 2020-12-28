<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $login_data = ['email' => $request->email, 'password' => $request->password];
        if (Auth::attempt($login_data)) {
            $user = Auth::user();
            $token = $user->createToken('my api token')->accessToken;
            return response([
                'status' => 'access',
                'token' => $token
            ]);
            return view('dashboard.dashboard');
        }
        return response([
            'status' => 'error',
            'message' => 'invalid authentication'
        ]);

        //return redirect()->back()->with('error','Error Email or Password');
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
