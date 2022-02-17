<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths/login');
    }

    public function validator(array $data)
    {
        return Hash::make($data, [
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    public function postlogin(Request $request)
    {
    if(Auth::attempt($request->only('email','password')))
    {
        return redirect('/dashboard');
    }
    else{ Alert::error('Login Gagal', 'Email/Password yang dimasukan salah!');
        return redirect('/login');
    } 
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
