<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fornecedor>
 */
class FornecedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Fornecedor::class; // aqui definimos qual modelo essa factory vai criar, nesse caso o Fornecedor
    
    public function definition(): array
    {
        return [
            // aqui podemos usar os metodos do faker para gerar dados aleatorios para os campos da tabela fornecedores
                'nome' => $this->faker->company(),
                'site' => $this->faker->url(),
                'uf' => $this->faker->stateAbbr(),
                'email' => $this->faker->unique()->companyEmail()
        ];
    }
}
