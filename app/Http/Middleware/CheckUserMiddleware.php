<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserMiddleware
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
        if (!\Auth::id()) {

        }        

        $user = \Auth::user();

        if ($user->level == 2) {
            dd('Have not permission');
        }

        return $next($request);
    }
}
