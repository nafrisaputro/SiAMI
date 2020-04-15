<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('welcome');
    }
    public function postlogin(Request $request)
    {
        // dd($request->all());
        if(Auth::attempt($request->only('nip','password'))){
            return redirect('/dashboard');
        }
        return redirect('/');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
