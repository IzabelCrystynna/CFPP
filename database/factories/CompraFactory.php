<?php

namespace Database\Factories;

use App\Models\Compra;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Compra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    /**Factory que criar uma compra com valores padrões*/
    public function definition()
    {
        return [
            'valor' => $this->faker->randomFloat(1, 20, 30),
            'unidade'=> $this->faker->randomDigit(),
            'total'=> $this->faker->randomFloat(1, 20, 30),
            'cliente_id' => Cliente::inRandomOrder()->first()->id, 
        ];
    }
}
