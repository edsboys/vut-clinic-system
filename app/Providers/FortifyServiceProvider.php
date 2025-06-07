<?php

namespace App\Providers;

use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;

class FortifyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Set the username field to 'login' instead of default 'email'
        Fortify::username(function () {
            return 'login';
        });

        Fortify::ignoreRoutes();

        // Fortify action bindings (register, update, reset)
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        // Rate limiter for login
        RateLimiter::for('login', function (Request $request) {
            $login = (string) $request->input('login', '');
            return Limit::perMinute(5)->by($login . $request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        // Custom authenticateUsing callback to check login (email or id) and password
        Fortify::authenticateUsing(function (Request $request) {
            Log::info('Login attempt:', [
                'login' => $request->login,
                'role' => $request->role,
                'ip' => $request->ip()
            ]);

            // Validate the incoming request
            Validator::make($request->all(), [
                'login' => ['required', 'string'],
                'password' => ['required', 'string'],
                'role' => ['required', 'string'],
            ])->validate();

            // Determine if login is email or ID
            $isEmail = filter_var($request->login, FILTER_VALIDATE_EMAIL);

            // Query user based on login type
            $user = null;
            if ($isEmail) {
                $user = \App\Models\User::where('email', $request->login)->first();
            } else {
                // Adjust this if you use a different ID field
                $user = \App\Models\User::where('id', $request->login)
                    ->orWhere('student_id', $request->login)
                    ->first();
            }

            // Check if user exists, password matches, and role matches
            if ($user &&
                Hash::check($request->password, $user->password) &&
                $user->role === $request->role) {

                Log::info('Successful login for user:', ['id' => $user->id, 'role' => $user->role]);
                return $user;
            }

            Log::warning('Failed login attempt:', [
                'login' => $request->login,
                'role' => $request->role,
                'user_found' => $user ? 'yes' : 'no',
                'password_match' => $user ? Hash::check($request->password, $user->password) : 'n/a',
                'role_match' => $user ? ($user->role === $request->role) : 'n/a'
            ]);

            return null;
        });

        Route::get('/register', function () {
            abort(404);
        });

        // Views for Fortify
        Fortify::loginView(function () {
            return view('auth.login');
        });
        
        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });
        
        Fortify::resetPasswordView(function ($request) {
            return view('auth.reset-password', ['request' => $request]);
        });
        
        Fortify::verifyEmailView(function () {
            return view('auth.verify-email');
        });
        
        Fortify::twoFactorChallengeView(function () {
            return view('auth.two-factor-challenge');
        });
        
        Fortify::confirmPasswordView(function () {
            return view('auth.confirm-password');
        });
    }
}