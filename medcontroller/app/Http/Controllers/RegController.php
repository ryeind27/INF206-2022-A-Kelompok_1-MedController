<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function masuk()
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
    public function profile()
    {
        return view('profile');
    }
    public function setJadwal()
    {
        return view('Auth.jadwal');
    }
    public function chat()
    {
        return view('Auth.chat');
    }
    public function resep()
    {
        return view('Auth.resep');
    }
}
