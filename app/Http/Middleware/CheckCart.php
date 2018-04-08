<?php

namespace App\Http\Middleware;

use Closure;
use Cart;
class CheckCart
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
        if(Cart::total()!=0)
            {
                 return $next($request);
            }
       
       return  redirect('/');
    }
}
