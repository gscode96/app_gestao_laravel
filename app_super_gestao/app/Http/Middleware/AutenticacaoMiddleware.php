<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $parametro): Response
    {
        if ($parametro == 'teste') {
            echo 'Parametro recebido: '.$parametro;
            return $next($request);
        }
        return Response('Acesso negado. Você não tem permissão para acessar esta página.', 403);
        
        
    }
}
