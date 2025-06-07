<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardControlle extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
