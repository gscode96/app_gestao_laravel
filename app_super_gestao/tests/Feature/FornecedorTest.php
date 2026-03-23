<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Fornecedor;

class FornecedorTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_save_fornecedor(): void
    {
        // busca o fornecedor com id 1 e altera seus atributos

        $fornecedor = Fornecedor::find(1);
        $fornecedor->nome = 'Fornecedor alterado';
        $fornecedor->site = 'www.fornecedoralterado.com';
        $fornecedor->email = 'fornecedor@alterado.com';
        $fornecedor->save();

        $this->assertIsObject($fornecedor);
    }
}
