<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(! Auth::user()->isActive == 1){
            Auth::logout();
            return redirect('/')->with('not_active', 'Your accout has been disabled! Please contact your administrator if this an error.');
        }

        return $next($request);
    }
}
