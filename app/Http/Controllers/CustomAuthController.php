<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view('auth.login2');
    }
    public function Register()
    {
        return view('auth.register2');
    }
}
