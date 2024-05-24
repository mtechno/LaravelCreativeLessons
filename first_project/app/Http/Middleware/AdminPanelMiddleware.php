<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminPanelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response

    {
//        dd(auth());
//        return redirect('contacts');
        if (auth()->user()!=null and (auth()->user()->role != 'admin')){
//            echo (222222222);
            echo $request->path();
            return redirect()->route('contacts');
        }
//        echo (111111111);
        return $next($request);
    }
}
