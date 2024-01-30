<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        request()->validate(
            [
                "password" => "required",
                "email" => "required"

            ]
        );
        $email = request()->email;
        $password = request()->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {





            if (auth()->user()->is_admin == '0') {
                return redirect()->route('user_page');
            } elseif (auth()->user()->is_admin == '1') {
                return redirect()->route('resellers');
            } else {
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        } else {
            return redirect()->back()->with('error', 'Wrong User Credentials');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
