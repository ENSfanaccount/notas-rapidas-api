<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificarRol
{
    public function handle(Request $request, Closure $next, string ...$rolesPermitidos): Response
    {
        // 1. ¿Hay sesión activa?
        if (!auth()->check()) {
            return redirect()->route('login')
                ->with('error', 'Debes iniciar sesión.');
        }

        // 2. ¿El rol del usuario está en la lista de permitidos?
        $rolUsuario = auth()->user()->rol;

        if (!in_array($rolUsuario, $rolesPermitidos)) {
            return redirect()->route('dashboard')
                ->with('error', 'No tienes permiso para acceder a esta sección.');
        }

        // 3. Todo bien, dejar pasar
        return $next($request);
    }
}