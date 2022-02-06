<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected $student_route = 'student.login';
    protected $admin_route = 'admin.login';
    protected $supporter_route = 'supporter.login';

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if(Route::is('supporter.*')){
                return route($this->supporter_route);
            }elseif(Route::is('admin.*')){
                return route($this->admin_route);
            }
            else{
                    return route($this->student_route);
            }
        
        }
    }
}
