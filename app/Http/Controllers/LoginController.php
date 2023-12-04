<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            "title" => "Login",
            "active" => "login",
        ]);
    }

    public function authenticate()
    {
        request()->validate([
            'username' => 'required|email:dns',
            'password' => 'required',
        ]);

        dd(request()->all());

        // if (auth()->attempt($credentials)) {
        //     request()->session()->regenerate();

        //     dd(session());
        // }

        // return back()->with('loginError', 'Login failed!');
    }
}
