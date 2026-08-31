<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato' ])->name('site.contato');
Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobrenos'])->name('site.sobrenos');
Route::post('/contato', [App\Http\Controllers\ContatoController::class, 'salvar' ])->name('site.contato');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('site.login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'autenticar'])->name('site.login');

// Grupo de rotas com prefixo /app para separar de outras rotas
Route::prefix('/app')->middleware(['log.acesso','autenticacao:teste'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('app.home');
    Route::get('/sair', [App\Http\Controllers\LoginController::class, 'sair'])->name('app.sair');
    Route::get('/cliente', [App\Http\Controllers\ClienteController::class, 'index'])->name('app.cliente');
    Route::get('/fornecedor', [App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedor');
    Route::get('/produto', [App\Http\Controllers\ProdutoController::class, 'index'])->name('app.produto');
});


// testanto redirecionamento de rota
Route::get('/teste/{p1}/{p2}', [App\Http\Controllers\TesteController::class, 'teste'])->name('site.teste');


// rota fallback (rota que é chamada quando nenhuma outra rota é encontrada)
Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial.';
});
