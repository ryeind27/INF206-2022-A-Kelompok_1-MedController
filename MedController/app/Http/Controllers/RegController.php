<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function index()
    {
        return view('Auth.signIn');
    }

    public function daftar()
    {
        return view('Auth.signUp');
    }
}
