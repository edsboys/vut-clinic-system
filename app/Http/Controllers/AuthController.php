<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showlogin()
    {
        return view('auth.login');

    }


public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email|unique:users',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('dashboard');;
    }

    return response()->json(['error' => 'Invalid credentials'], 401);
}
}
