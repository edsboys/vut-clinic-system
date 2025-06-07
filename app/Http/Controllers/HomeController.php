<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        // Redirect user to their role-based dashboard
        $role = auth()->user()->role ?? null;
        $dashboards = [
            'student' => 'student.dashboard',
            'staff'   => 'staff.dashboard',
            'admin'   => 'admin.dashboard',
            'doctor'  => 'doctor.dashboard',
            'nurse'   => 'nurse.dashboard'
        ];

        if (!isset($dashboards[$role])) {
            abort(403, 'Unauthorized role');
        }

        return redirect()->route($dashboards[$role]);
    }
    
    public function dashboard() 
    {
        return view('dashboard');
    }
}