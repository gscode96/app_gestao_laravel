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
        // ou
        // podemos usar o metodo fill para preencher os atributos do fornecedor desde que os campos sejam fillable
        $fornecedor->fill([
            'nome' => 'Fornecedor alterado',
            'site' => 'www.fornecedoralterado.com',
            'email' => 'fornecedor@alterado.com'
        ]);

        $fornecedor->save();

        $this->assertIsObject($fornecedor);
    }

    public function test_update_fornecedor(): void
    {

        $fornecedor = Fornecedor::find(1)->update([
            'nome' => 'Fornecedor alterado Update',
            'site' => 'www.fornecedoralterado.com',
            'email' => 'fornecedor@alterado.com'
        ]);

        $this->assertTrue($fornecedor);
    }

    public function test_create_fornecedor(): void
    {

        // criando um fornecedor e salva usando o metodo create, desde que os campos sejam fillable
        $fornecedor = Fornecedor::create([
            'nome' => 'Fornecedor criado',
            'site' => 'www.fornecedorcriado.com',
            'email' => 'fornecedor@criado.com',
            'uf' => 'SP',
        ]);

        $this->assertIsObject($fornecedor);
    }

    public function test_delete_fornecedor(): void
    {

        $fornecedor = Fornecedor::Where('nome', 'Fornecedor criado')->delete();

        // para deletar de fato somente com o forceDelete, 
        // o delete apenas marca o registro como deletado, mas ele ainda existe no banco de dados
        $this->assertTrue($fornecedor > 0);

    }

}
