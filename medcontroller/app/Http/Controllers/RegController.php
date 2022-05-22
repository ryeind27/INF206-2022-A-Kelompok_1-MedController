<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    public function Masuk()
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

        $request -> session()->flush('success', 'Successfully created! ');

        return redirect('/');
    }

    public function login(request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);


        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/Home');
        }

        return back()->with('loginError', 'Email or Password is wrong');
    }

}
