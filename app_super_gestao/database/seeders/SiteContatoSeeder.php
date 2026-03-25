<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $contato = new SiteContato();
        $contato->nome = 'Contato Teste';
        $contato->telefone = '11999999999';
        $contato->email = 'contato@contatoteste.com';
        $contato->motivo_contato = 1; // motivo contato 1 - Dúvida
        $contato->mensagem = 'Mensagem de teste para o contato';    
        $contato->save();

        SiteContato::create([
            'nome' => 'Contato Teste 2',
            'telefone' => '11999999998',
            'email' => 'contato2@contatoteste.com',
            'motivo_contato' => 2, // motivo contato 2 - Elogio
            'mensagem' => 'Mensagem de teste para o contato 2'
        ]);
    }
}
