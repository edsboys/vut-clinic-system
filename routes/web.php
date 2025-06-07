<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomLoginController;
use App\Http\Controllers\AppointmentController;


// Public landing page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Guest-only login routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [CustomLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [CustomLoginController::class, 'login']);
    Route::any('/register', function () {
        return redirect('/login');
    })->name('register');
});

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [CustomLoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        $dashboards = [
            'student' => 'student.dashboard',
            'staff'   => 'staff.dashboard',
            'admin'   => 'admin.dashboard',
            'doctor'  => 'doctor.dashboard',
            'nurse'   => 'nurse.dashboard',
        ];
        $role = auth()->user()->role;
        if (!isset($dashboards[$role])) {
            abort(403, 'Unauthorized role');
        }
        return redirect()->route($dashboards[$role]);
    })->name('dashboard');

    Route::resource('appointments', AppointmentController::class);
});
