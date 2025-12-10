<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobreNos');
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato' ])->name('site.contato');
Route::get('/login', function () {return 'Login';})->name('site.login');

// Grupo de rotas com prefixo /app para separar de outras rotas
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', [App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function () {return 'Produtos';})->name('app.produtos');
});


// testanto redirecionamento de rota
Route::get('/teste/{p1}/{p2}', [App\Http\Controllers\TesteController::class, 'teste'])->name('site.teste');


// rota fallback (rota que é chamada quando nenhuma outra rota é encontrada)
Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial.';
});