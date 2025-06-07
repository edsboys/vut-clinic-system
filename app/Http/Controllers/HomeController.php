<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $role = auth()->user()->role;

        return $role;
    }
    
    public function dashboard() 
    {
        return view('dashboard');
    }
}