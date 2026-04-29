<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->web(append: [
            'log.acesso' => \App\Http\Middleware\LogAcessoMiddleware::class, 
        ]);
        $middleware->alias([
         'log.acesso' => \App\Http\Middleware\LogAcessoMiddleware::class,
         'autenticacao' => \App\Http\Middleware\AutenticacaoMiddleware::class]);
        $middleware->api(append: [
            //
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
