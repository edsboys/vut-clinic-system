<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CustomLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|string'
        ]);

        $isEmail = filter_var($request->login, FILTER_VALIDATE_EMAIL);
        
        // Find user by email or ID
        $user = User::when($isEmail, function ($query) use ($request) {
            return $query->where('email', $request->login);
        }, function ($query) use ($request) {
            return $query->where('id', $request->login);
        })->first();

        // Verify credentials and role
        if ($user && 
            Hash::check($request->password, $user->password) && 
            $user->role === $request->role) {
            
            Auth::login($user);
            $request->session()->regenerate();
            
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->withInput($request->except('password'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}
