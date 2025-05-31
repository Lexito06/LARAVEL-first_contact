<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * Middleware para verificar si el usuario es desarrollador o administrador.
 * Permite el acceso a rutas específicas solo a usuarios con roles 1 (Administrador) o 2 (Desarrollador).
 */
class Developer
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && (Auth::user()->id_rol == 2 || Auth::user()->id_rol == 1)) {
            return $next($request);
        }
        abort(403, 'No tienes permisos para acceder a esta página.');
    }
}
