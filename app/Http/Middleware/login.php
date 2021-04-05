<?php

namespace App\Http\Middleware;

use Closure;

class login
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
        if ($request->username != 'admin' || $request->password != '12345') {
            return redirect('/login');
        }
        return $next($request);
    }
}
