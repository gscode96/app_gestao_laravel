<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor A', 'status' => 'N', 'cnpj' => '', 'ddd' => '11', 'telefone' => '0000-0000'],
            1 => ['nome' => 'Fornecedor B', 'status' => 'S', 'ddd' => '22', 'telefone' => '1111-1111'],
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
