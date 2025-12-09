<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobreNos' ]);

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato' ]);

Route::get(
    '/contato/{nome}/{categoria}/{assunto}/{mensagem}',
    function (string $nome, string $categoria, string $assunto, string $mensagem) {
       echo "Estamos aqui para ajudar, $nome.<br>
       Sua mensagem foi enviada com sucesso!<br>
       Categoria: $categoria<br>
       Assunto : $assunto<br>
       Mensagem: $mensagem";    
    }
);
