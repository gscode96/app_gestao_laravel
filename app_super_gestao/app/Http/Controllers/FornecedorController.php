<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor A',
             'status' => 'N',
             'cnpj' => '11.111.111/0001-11',
             'ddd' => '11',
             'telefone' => '0000-0000'],
            1 => [
             'nome' => 'Fornecedor B',
             'status' => 'S',
             'cnpj' => '22.222.222/0002-22',
             'ddd' => '85',
             'telefone' => '1111-1111'],
            2 => [
             'nome' => 'Fornecedor C',
             'status' => 'S',
             'cnpj' => '33.333.333/0003-33',
             'ddd' => '',
             'telefone' => '3333-3333']
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
