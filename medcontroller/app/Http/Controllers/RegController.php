<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
    //SignUp Store Data
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
            'password_confirm' => 'required|same:password',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        $request -> session()->flash('success', 'Successfully created! ');

        return redirect('/');
    }
}
