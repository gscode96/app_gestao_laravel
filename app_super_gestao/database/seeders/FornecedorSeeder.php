<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Seeder é responsável por popular a tabela de fornecedores com dados de teste, 
     * para isso podemos usar o metodo create ou save, ou ainda usar a factory para criar vários fornecedores de uma vez.
     */
    public function run(): void
    {
        // criando 10 fornecedores usando a factory
        Fornecedor::factory()->count(10)->create(); // precisa criar a factory para o fornecedor
        
        /*
        // criando um fornecedor manualmente
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor Teste';
        $fornecedor->site = 'www.fornecedorteste.com';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'contato@fornecedorteste.com';
        $fornecedor->save();

        // ou podemos usar o metodo create para criar um fornecedor desde que os campos sejam fillable
        Fornecedor::create([
            'nome' => 'Fornecedor Teste 2',
            'site' => 'www.fornecedorteste2.com',
            'uf' => 'RJ',
            'email' => 'contato@fornecedorteste2.com'
        ]);

        // usando insert porem não é recomendado pois não tem as vantagens do Eloquent como timestamps, mass assignment, etc
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor Teste 3',
            'site' => 'www.fornecedorteste3.com',
            'uf' => 'MG',
            'email' => 'contato@fornecedorteste3.com'
        ]);
    */
    }
}
