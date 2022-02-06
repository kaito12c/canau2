<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    private const GUARD_STUDENT = 'students';
    private const GUARD_SUPPORTER = 'supporters';
    private const GUARD_ADMIN = 'admin';


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
        // }

        if(Auth::guard(self::GUARD_STUDENT)->check() && $request->routeIs('student.*')){
            return redirect(RouteServiceProvider::STUDENT);
        }

        if(Auth::guard(self::GUARD_SUPPORTER)->check() && $request->routeIs('supporter.*')){
            return redirect(RouteServiceProvider::SUPPORTER);
        }

        if(Auth::guard(self::GUARD_ADMIN)->check() && $request->routeIs('admin.*')){
            return redirect(RouteServiceProvider::ADMIN);
        }

        return $next($request);
    }
}
