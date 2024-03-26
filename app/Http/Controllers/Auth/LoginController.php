<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected function redirectTo() {
        if (auth()->check()) {
            if (auth()->user()->role == 'admin') {
                return 'dashboard';
            } elseif (auth()->user()->role == 'user') {
                return 'home';
            }
        }
        return '/';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string|email:filter',
            'password' => 'required|string|min:8',
        ], [
            $this->username() . '.email' => 'Email belum terdaftar.',
            'email.required' => 'Email address must be filled.',
            'email.email' => 'Invalid email address format.',
            'password.required' => 'Password must be filled.',
            'password.min' => 'Password must be at least 8 characters long.',
        ]);

        $credentials = $request->only($this->username(), 'password');

        if (!Auth::attempt($credentials)) {
            // Check if the email exists before showing password error
            if (User::where($this->username(), $request->{$this->username()})->exists()) {
                throw ValidationException::withMessages([
                    'password' => 'Password is incorrect.',
                ]);
            } else {
                throw ValidationException::withMessages([
                    $this->username() => 'Email belum terdaftar.',
                ]);
            }
        }

        return redirect($this->redirectTo());
    }

}
