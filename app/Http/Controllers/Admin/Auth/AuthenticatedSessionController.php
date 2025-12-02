<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view for vendor and user.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request for vendor and user.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();

        // Check if user is active
        if (!$user->isActive()) {
            Auth::logout();
            return redirect()->route('login')->with('error', 'Your account is inactive. Please contact administrator.');
        }

        // If admin tries to login from main login page, redirect to admin login
        if ($user->isAdmin()) {
            Auth::logout();
            return redirect()->route('admin.login')->with('error', 'Please use admin login page.');
        }

        // Redirect based on role
        return $this->redirectToDashboard($user);
    }

    private function redirectToDashboard($user): RedirectResponse
    {
        switch ($user->role) {
            case 'vendor':
                return redirect()->intended(route('vendor.dashboard'));
            case 'user':
                return redirect()->intended(route('user.dashboard'));
            default:
                return redirect()->intended(route('home'));
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