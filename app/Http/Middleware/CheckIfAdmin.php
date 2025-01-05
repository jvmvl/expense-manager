<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            Log::info('User is not logged in');
            // return redirect()->route('login');
        }

        $is_admin = Auth::user()->is_admin ?? false;

        Log::info( $is_admin );
        if(!$is_admin){
            Log::info('User is not an admin');
            // return abort(403, 'Unauthorized.');
            // return redirect('/')->with('error', 'Access denied: Admins only.');
        } else {
            Log::info('User is an admin');
        }

        

        return $next($request);
    }
}
