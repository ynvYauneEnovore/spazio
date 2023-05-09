<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate
{
    /**
     * Obtenga la ruta a la que se debe redirigir al usuario cuando no está autenticado.
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next)
    {
        if (!is_null(request()->user())) {
            return $next($request);
        } else {
            return redirect('login');
        }
    }
}
