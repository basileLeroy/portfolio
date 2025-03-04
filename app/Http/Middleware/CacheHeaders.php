<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CacheHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($request->is('storage/*') || $request->is('images/*') || $this->isStaticAsset($request)) {
            $response->headers->set('Cache-Control', 'public, max-age=31536000, immutable');
            $response->headers->set('Expires', gmdate('D, d M Y H:i:s', time() + 31536000) . ' GMT');
        }

        return $next($request);
    }

    /**
     * Check if the request is for a static asset (CSS, JS, images).
     */
    private function isStaticAsset(Request $request): bool
    {
        return preg_match('/\.(jpg|jpeg|png|gif|webp|svg|css|js|woff2|woff|ttf|eot)$/i', $request->path());
    }
}
