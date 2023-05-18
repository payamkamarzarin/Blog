<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store()
    {
        $validate_data = $this->validate(request(),[
            'firstname',
            'lastname' ,
            'fathername',
            'nationalcode' ,
            'phonenumber',
            'email',
            'postalcode' ,
            'address' ,
            'password'
        ]);

        User::create([
            'firstname'=> request('firstname'),
            'lastname' => request('lastname'),
            'fathername' => request('fathername'),
            'nationalcode' => request('nationalcode'),
            'phonenumber' => request('phonenumber'),
            'email' => request('email'),
            'postalcode' => request('postalcode'),
            'address' => request('address'),
            'password' => request('password')
        ]);

        return redirect(route('login'));
    }
}
