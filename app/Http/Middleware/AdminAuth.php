<?php

namespace App\Http\Middleware;
use Redirect;
use Closure;

class AdminAuth
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
      if(!auth()->guard('admin')->check())
      {
        return Redirect::route('admin.login');
      }
        return $next($request);
    }
}
