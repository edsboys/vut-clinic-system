<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $role = Auth::guard($guard)->user()->role ?? null;

                $routes = [
                    'admin'   => route('admin.dashboard'),
                    'doctor'  => route('doctor.dashboard'),
                    'nurse'   => route('nurse.dashboard'),
                    'student' => route('student.dashboard'),
                    'staff'   => route('staff.dashboard'),
                ];

                return redirect($routes[$role] ?? route('dashboard'));
            }
        }

        return $next($request);
    }
}
