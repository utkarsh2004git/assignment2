<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Session;
use Symfony\Component\HttpFoundation\Response;
use Auth;
class AdminAuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(session()->has('loginId')){
            return $next($request);
        }
        else{
            return redirect('/admin/login')->with('fail',"You have to login first");
        }
    }
}
