<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Pengusaha
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
      if (!Auth::check()){
        return redirect('login');
      }

      if (Auth::user()->id_level != 2 ){
        return redirect('home');
      }
        return $next($request);
    }
}
