<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NurseDashboardController extends Controller
{
    public function dashboard()
    {
        return view('nurse.dashboard');
    }
}
