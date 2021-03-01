<?php

namespace Database\Factories;

use App\Models\Produto;
use App\Models\Compra;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $produtos =['arroz','feijão','macarrão','café','farinha','bolacha','refrigerante','pipoca','biscoito','iogurte','suco','sorvete','batata-frita','carne','frango','tomate','cenoura','alface','repolho'];
        return [
            'nome' => $produtos[array_rand($produtos)],
            'descricao' => $this->faker->text(),
            'compra_id' => Compra::inRandomOrder()->first()->id,
        ];
    }
}
