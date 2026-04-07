<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    { 
        //? request é uma classe do Laravel que representa a requisição HTTP feita pelo usuário,
        //? ela tem vários métodos para acessar os dados da requisição, como por exemplo:
        //? pode ser vizualizado no browser usando o comando dd($request) ou dd($request->all()) para ver todos os dados da requisição ou no f12 do navegador na aba network,
        //? clicando na requisição feita para a rota de contato e vendo os dados enviados no payload
        //? todo formulario precisa ter o token gerado pelo Laravel para evitar ataques de CSRF, 
        //? esse token é gerado automaticamente quando usamos o blade e o comando @csrf

        //? salvando os dados do contato no banco de dados usando o Eloquent ORM do Laravel
        //? metodo usado quando precisa tratar os dados antes de salvar, por exemplo, formatar o telefone ou validar os dados
        /*$contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        $contato->save();
        */

        //? outra forma de salvar os dados do contato no banco de dados usando o Eloquent ORM do Laravel é usando o método fill() 
        //? esse metodo preeche os campos direto do modelo com os dados da requisição
        $contato = new SiteContato();
        $contato->fill($request->all());
        $contato->save();

        //? outro metodo de salvar os dados do contato no banco de dados usando o Eloquent ORM do Laravel é usando o método create()
        //? esse metodo é mais simples, mas precisa definir os campos fillable no modelo
        //? SiteContato::create($request->all());   
        return view('site.contato', ['titulo' => 'Contato (Controller)']);
    }
}
