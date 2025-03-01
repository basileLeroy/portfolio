<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Spatie\Csp\AddCspHeaders;


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

        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'DENY');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('Referrer-Policy', 'no-referrer-when-downgrade');

        // Add more headers as needed
        if (app()->environment('production')) {
            $csp = new Csp();
            $csp->addDirective('default-src', "'self'")
                ->addDirective('style-src', "'self' 'unsafe-inline' https://cdnjs.cloudflare.com https://fonts.bunny.net")
                ->addDirective('script-src', "'self' 'unsafe-inline' 'unsafe-eval' https://www.google.com/recaptcha/ https://cloud.umami.is")
                ->addDirective('font-src', "'self' https://fonts.bunny.net https://cdnjs.cloudflare.com")
                ->addDirective('img-src', "'self' data:")
                ->addDirective('frame-src', "'self' https://www.google.com/");

            foreach ($csp->toArray() as $key => $value) {
                $response->headers->set("Content-Security-Policy", "$key $value;");
            }
        }

        return $response;
    }
}
