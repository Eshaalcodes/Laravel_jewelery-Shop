<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserRole
{
    public function handle(Request $request, Closure $next): Response
    {
        // User must be logged in
        if (!Auth::check()) {
            return redirect()->route('loginFrom');
        }

        // Admin-only pages
        $adminPage =
            $request->routeIs('admin') ||
            $request->routeIs('category.*') ||
            $request->routeIs('subcategories.*') ||
            $request->routeIs('admin.orders') ||
            $request->is('products') ||
            $request->is('products/*');

        // If page is admin-only, user must be admin
        if ($adminPage && Auth::user()->role != 'admin') {
            return redirect()->route('index');
        }

        return $next($request);
    }
}