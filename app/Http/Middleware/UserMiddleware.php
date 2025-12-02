<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Must be logged in
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        // Must be user
        if (!auth()->user()->isUser()) {
            return redirect('/')->with('error', 'Access denied.');
        }

        // Must be active
        if (!auth()->user()->isActive()) {
            Auth::logout();
            return redirect()->route('login')->with('error', 'Your account is inactive.');
        }

        return $next($request);
    }
}
