<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        /*$response = $next($request);
        $response->header->set('Access-Control-Allow-Origin','*');
        $response->header->setheader('Access-Control-Allow-Methods', 'PUT, POST, GET, DELETE, OPTIONS');
        $response->header->setheader('Access-Control-Allow-Headers','Accept, Authorization, Content-Type');*/
        return $next($request);
    }
}
