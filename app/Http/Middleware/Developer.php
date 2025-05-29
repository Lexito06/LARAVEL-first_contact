<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
