<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContato>
 */
class SiteContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\SiteContato::class; // aqui definimos qual modelo essa factory vai criar, nesse caso o SiteContato

    public function definition(): array
    {
        return [
            // aqui podemos usar os metodos do faker para gerar dados aleatorios para os campos da tabela site_contatos
            'nome' => $this->faker->name(),
            'telefone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'motivo_contato' => $this->faker->numberBetween(1, 3),
            'mensagem' => $this->faker->text(200)

        ];
    }
}
