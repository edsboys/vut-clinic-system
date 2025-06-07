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

Route::get('/dashboard', function () {
    $role = auth()->user()->role;

    if ($role === 'student') {
        return redirect()->route('student.dashboard');
    } elseif ($role === 'admin') {
        return redirect()->route('admin.dashboard');
    } elseif ($role === 'doctor') {
        return redirect()->route('doctor.dashboard');
    } elseif ($role === 'nurse') {
        return redirect()->route('nurse.dashboard');
    } elseif ($role === 'staff') {
        return redirect()->route('staff.dashboard');
    } else {
        return redirect()->route('Welcome');
    }
});

Route::get('/student/dashboard', [StudentDashboardController::class, 'dashboard'])->name('student.dashboard');
Route::get('/admin/dashboard', [AdminDashboardControlle::class, 'dashboard'])->name('admin.dashboard');
Route::get('/doctor/dashboard', [DoctorDashboardController::class, 'dashboard'])->name('doctor.dashboard');
Route::get('/nurse/dashboard', [NurseDashboardController::class, 'dashboard'])->name('nurse.dashboard');
Route::get('/staff/dashboard', [StaffDashboardController::class, 'dashboard'])->name('staff.dashboard');

Route::middleware(['auth'])->group(function () {
    // Admin Dashboard Route
    Route::get('/admin/dashboard', [AdminDashboardControlle::class, 'index'])->name('admin.dashboard');

    // Doctor Dashboard Route
    Route::get('/doctor/dashboard', [DoctorDashboardController::class, 'index'])->name('doctor.dashboard');

    // Nurse Dashboard Route
    Route::get('/nurse/dashboard', [NurseDashboardController::class, 'index'])->name('nurse.dashboard');

    // Staff Dashboard Route
    Route::get('/staff/dashboard', [StaffDashboardController::class, 'index'])->name('staff.dashboard');

    // Student Dashboard Route
    Route::get('/student/dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard');

    Route::middleware(['auth', 'role:admin'])->get('/admin/dashboard', [AdminDashboardControlle::class, 'index']);
    Route::middleware(['auth', 'role:doctor'])->get('/doctor/dashboard', [DoctorDashboardController::class, 'index']);
    Route::middleware(['auth', 'role:nurse'])->get('/nurse/dashboard', [NurseDashboardController::class, 'index']);
    Route::middleware(['auth', 'role:staff'])->get('/staff/dashboard', [StaffDashboardController::class, 'index']);
    Route::middleware(['auth', 'role:student'])->get('/student/dashboard', [StudentDashboardController::class, 'index']);
});
