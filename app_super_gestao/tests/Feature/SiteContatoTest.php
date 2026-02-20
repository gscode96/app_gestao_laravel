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
}
