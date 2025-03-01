<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Redirect;


class ForceTrailingSlash
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = $request->path();

        // Ensure it's not the root ("/") and doesn't already end with a "/"
        if ($path !== '/' && !str_ends_with($path, '/')) {
            return Redirect::to($request->fullUrl() . '/', 301);
        }

        return $next($request);
    }
}
