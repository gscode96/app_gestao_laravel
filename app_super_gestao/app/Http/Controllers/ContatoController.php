<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    { 
        //? request é uma classe do Laravel que representa a requisição HTTP feita pelo usuário,
        //? ela tem vários métodos para acessar os dados da requisição, como por exemplo:
        //? pode ser vizualizado no browser usando o comando dd($request) ou dd($request->all()) para ver todos os dados da requisição ou no f12 do navegador na aba network,
        //? clicando na requisição feita para a rota de contato e vendo os dados enviados no payload

        $request->all(); //? para trazer todos os dados do formulário em um array associativo
        $request->input('nome'); //? para trazer o valor do campo nome

        //? todo formulario precisa ter o token gerado pelo Laravel para evitar ataques de CSRF, 
        //? esse token é gerado automaticamente quando usamos o blade e o comando @csrf
        return view('site.contato', ['titulo' => 'Contato (Controller)']);
    }
}
