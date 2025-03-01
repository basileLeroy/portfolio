<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // General Security Headers
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'DENY');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('Referrer-Policy', 'no-referrer-when-downgrade');

        // Apply CSP only in production
        if (app()->environment('production')) {
            $csp = "default-src 'self'; " .
                "style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com https://fonts.bunny.net; " .
                "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://www.google.com/recaptcha/ https://www.gstatic.com/recaptcha/;" .
                "font-src 'self' https://fonts.bunny.net https://cdnjs.cloudflare.com; " .
                "img-src 'self' data:; " .
                "frame-src 'self' https://www.google.com/";

            $response->headers->set("Content-Security-Policy", $csp);
        }

        return $response;
    }
}
