<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = '';
        if ($request->get('erro') == 1) {
            $erro = 'Usuário e/ou senha não existe';
        } elseif ($request->get('erro') == 2) {
            $erro = 'Necessário realizar login para acessar a página';
        }
        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request)
    {
        $regras = [
            'email' => 'email|required',
            'password' => 'required|min:4|max:15'
        ];

        $feedback = [
            'email.email' => 'O campo e-mail é obrigatório',
            'password.required' => 'O campo senha é obrigatório'
        ];
        $request->validate($regras, $feedback);

        $email = $request->get('email');
        $password = $request->get('password');

        $user = new User();
        $exists = $user->where('email', $email)->where('password', $password)->get()->first();

        if (isset($exists->name)) {
   
            $request->session()->put('nome', $exists->name);
            $request->session()->put('email', $exists->email);
            
            return redirect()->route('app.clientes');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }


    }

    public function sair(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('site.index');
    }
}
