<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function index()
    {
        return view('Auth.Login');
    }

    public function daftar()
    {
        return view('Auth.SignUp');
    }

    public function forgetpass()
    {
        return view('Auth.forgotpass');
    }
}
