<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobreNos');
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato' ])->name('site.contato');
Route::get('/login', function () {return 'Login';})->name('site.login');

// Grupo de rotas com prefixo /app para separar de outras rotas
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', function () {return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function () {return 'Produtos';})->name('app.produtos');
});


// testanto redirecionamento de rota
Route::get('/rota1', function () {
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function () {
    return redirect()->route('site.rota1');
})->name('site.rota2');
