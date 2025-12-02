<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is authenticated and is admin
        if (auth()->check() && auth()->user()->isAdmin()) {
            // If admin is already logged in and trying to access login page, redirect to dashboard
            if ($request->routeIs('admin.login') || $request->is('admin/login')) {
                return redirect()->route('admin.dashboard');
            }
            return $next($request);
        }

        // If not admin, redirect to admin login with error
        return redirect()->route('admin.login')->with('error', 'Please login as admin to access this page.');
    }
}
