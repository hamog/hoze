<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RemoveHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ( function_exists( 'header_remove' ) )
        {
          header_remove( 'X-Powered-By' );
          header_remove( 'Server' );
          header_remove( 'X-Frame-Options' );
        } else {
          @ini_set( 'expose_php', 'off' );
        }

        return $next($request);
    }
}
