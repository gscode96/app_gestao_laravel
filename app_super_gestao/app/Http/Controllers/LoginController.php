<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login', ['titulo' => 'Login']);
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


    }
}
