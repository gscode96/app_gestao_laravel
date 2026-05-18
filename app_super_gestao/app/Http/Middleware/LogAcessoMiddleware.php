<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\LogAcesso;
class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        $date = new \DateTime('now', new \DateTimeZone('America/Sao_Paulo'));
        $log = "IP:" . $request->server('REMOTE_ADDR') . " - " . $date->format('Y-m-d H:i:s') . " - " . $request->method() . " - " . $request->getRequestUri();
        LogAcesso::create(['log' => $log]);
        return $next($request);
    
    }
}
