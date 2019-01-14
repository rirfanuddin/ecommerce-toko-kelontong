<?php

namespace App\Http\Middleware;

use Closure;

class TokoMiddleware
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
        if(auth()->user()->getRole() == 3){
            return $next($request);
        }
        else{
            if(auth()->user()->getRole() == 1){
                return redirect('a/home')->with('error', 'You have not toko access'); 
            }
            elseif(auth()->user()->getRole() == 2){
                return redirect('p/home')->with('error', 'You have not toko access'); 
            }        
            elseif(auth()->user()->getRole() == 4){
                return redirect('u/home')->with('error', 'You have not toko access'); 
            }
        }   
    }
}
