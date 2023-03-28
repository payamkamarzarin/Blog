<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function customLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            return redirect()->intended('dashbord')
                        ->withSuccess('signed in');
        }
        return redirect("login")->whitSuccess('Login details are not valid');
    }
}
