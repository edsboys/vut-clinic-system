<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->routes(function () {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });

        // Custom authentication: allow login by email or ID, and check role
        Fortify::authenticateUsing(function (Request $request) {
            $login = $request->input('login') ?? $request->input('email');
            $role = $request->input('role');
            $password = $request->input('password');

            // Determine if login is email or ID
            $isEmail = filter_var($login, FILTER_VALIDATE_EMAIL);

            $user = null;
            if ($isEmail) {
                $user = User::where('email', $login)->first();
            } else {
                $user = User::where('id', $login)
                    ->orWhere('student_id', $login)
                    ->first();
            }

            if (
                $user &&
                Hash::check($password, $user->password) &&
                $user->role === $role
            ) {
                return $user;
            }

            return null;
        });
    }
}
