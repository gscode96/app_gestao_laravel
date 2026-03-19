<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\SiteContato;

class SiteContatoTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_busca_all(): void
    {
        //? para trazer todos os registros da tabela site_contatos
        $contato = SiteContato::all();
        $contato = SiteContato::get();

        $this->assertIsIterable($contato);

    }

    public function test_busca_find(): void
    {
        //? para trazer o primeiro registro da tabela site_contatos
        $contato = SiteContato::find(1); //? para trazer o registro com id igual a 1

        $this->assertIsObject($contato);


    }

    public function test_busca_where(): void
    {
        //? para trazer campos com um valor específico, por exemplo, motivo_contato igual a 1
        $contato = SiteContato::where('motivo_contato', 1)->get();

        $this->assertIsObject($contato);

    }

    public function test_busca_where_in(): void
    {
        //? para trazer campos com um valor específico, por exemplo, motivo_contato igual a 1 ou 2 ou 3
        $contato = SiteContato::WhereIn('motivo_contato', [1, 2, 3])->get();

        $this->assertIsObject($contato);

    }

    public function test_busca_where_between(): void
    {
        //? para trazer campos entre um intervalo de valores, por exemplo, motivo_contato entre 1 e 3
        $contato = SiteContato::whereBetween('motivo_contato', [1, 3])->get();

        $this->assertIsObject($contato);

    }

    public function test_busca_multiple_where(): void
    {
        //? para trazer campos com mais de uma condição, por exemplo, motivo_contato igual a 1 e email igual a 'teste@teste.com'
        $contato = SiteContato::where('nome', '<>', '')->whereIn('motivo_contato', [1, 2])->whereBetween('created_at', ['2025-12-16', '2026-02-20'])->get();
        print_r($contato->toArray());
        $this->assertIsObject($contato);
    }

    public function test_busca_null(): void
    {
        //? para trazer campos com valor nulo, por exemplo, motivo_contato igual a null
        $contato = SiteContato::whereNull('motivo_contato')->get();

        $this->assertIsObject($contato);

    }

    public function test_operacao_logica(): void
    {
        // aplicando procedencia logica nas operações
        $contato = SiteContato::where(function ($query) {
            $query->where('nome', 'Jorge')
                  ->orWhere('nome', 'Ana');
        })->where(function ($query) {
            $query->whereIn('motivo_contato', [1,2])
                  ->orWhereBetween('id', [4, 6]);
        })->get();

        $this->assertIsObject($contato);

    }

    //---------Finalizado testes de buscas---------

    //---------Início testes de manipulação da collection---------

    public function test_manipulacao_collection(): void
    {
        //? para trazer o primeiro registro da tabela site_contatos
        $contato = SiteContato::whereIn('id', [1,2])->get(); //? para trazer o registro com id igual a 1
        $contato->last(); //? para trazer o último registro da collection
        $contato->first(); //? para trazer o primeiro registro da collection
        $contato->reverse(); //? para inverter a ordem dos registros na collection

        $contato->toArray(); //? para transformar a collection em um array, --- não é possivel acessar os metodos staticos da collection ---
        $contato->toJson(); //? para transformar a collection em um json; --- não é possivel acessar os metodos staticos da collection---

        $contato->pluck('nome', 'id'); //? para trazer apenas o campo nome da collection, com o id como chave
    }

}
