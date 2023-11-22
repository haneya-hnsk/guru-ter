<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PlainUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->commit  ){
            return redirect('/commit');
        }
        if(auth()->user()->admin  ){
            return redirect('/admin');
        }
        if(auth()->user()->kepsek  ){
            return redirect('/kepsek');
        }
        return $next($request);
    }
}
