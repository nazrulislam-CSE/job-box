<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminLoginController extends Controller
{
    /**
     * Display the admin login view.
     */
    public function create()
    {
        if (auth()->check() && auth()->user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.auth.login');
    }


    /**
     * Handle an incoming admin authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();

        // Check if user is admin and active
        if (!$user->isAdmin()) {
            Auth::logout();
            return redirect()->route('admin.login')->with('error', 'You are not authorized to access admin panel.');
        }

        if (!$user->isActive()) {
            Auth::logout();
            return redirect()->route('admin.login')->with('error', 'Your admin account is inactive.');
        }

       return redirect()->intended(route('admin.dashboard'))
                 ->with('success', 'Admin Logged in successfully!');

    }

    /**
     * Destroy an admin authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login')
                     ->with('success', 'Admin Logged out successfully!');
    }
}