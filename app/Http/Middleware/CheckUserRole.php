<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        Log::info("Auth::user()->role->name : " . Auth::user()->role->name);
        Log::info("role : " . $role);

        if (!Auth::check() || Auth::user()->role->name !== $role) {
            return abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}
