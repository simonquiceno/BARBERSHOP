<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Verificar si el usuario está autenticado y tiene el rol de Admin
         if (!Auth::check() || Auth::user()->role_id !== 1) {
            abort(403, 'Acceso denegado.');
        }

        return $next($request);
    }
}
