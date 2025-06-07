<?php

use App\Http\Controllers\AdminDashboardControlle;
use App\Http\Controllers\NurseDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomLoginController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorDashboardController;
use App\Http\Controllers\StaffDashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentDashboardController;

// Public landing page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Role-based dashboard redirect
Route::get('/dashboard', function () {
    $dashboards = [
        'student' => 'student.dashboard',
        'staff'   => 'staff.dashboard',
        'admin'   => 'admin.dashboard',
        'doctor'  => 'doctor.dashboard',
        'nurse'   => 'nurse.dashboard'
    ];
    $role = auth()->user()->role ?? null;
    if (!isset($dashboards[$role])) {
        abort(403, 'Unauthorized role');
    }
    return redirect()->route($dashboards[$role]);
})->middleware('auth')->name('dashboard');

// Individual dashboard routes (only define once)
Route::get('/student/dashboard', [StudentDashboardController::class, 'dashboard'])->name('student.dashboard');
Route::get('/admin/dashboard', [AdminDashboardControlle::class, 'dashboard'])->name('admin.dashboard');
Route::get('/doctor/dashboard', [DoctorDashboardController::class, 'dashboard'])->name('doctor.dashboard');
Route::get('/nurse/dashboard', [NurseDashboardController::class, 'dashboard'])->name('nurse.dashboard');
Route::get('/staff/dashboard', [StaffDashboardController::class, 'dashboard'])->name('staff.dashboard');

// Group for other authenticated routes
Route::middleware(['auth'])->group(function () {
    // Place other authenticated routes here if needed
});
