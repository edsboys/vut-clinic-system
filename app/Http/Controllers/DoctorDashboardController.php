<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorDashboardController extends Controller
{
    public function dashboard()
    {
        return view('doctor.dashboard');
    }
}
