<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'rua' => $this->faker->streetName(),
            'numero_casa' => $this->faker->randomNumber(3, true),
            'bairro' => $this->faker->sentence(3),
            'cidade' => $this->faker->city(),
            'UF' => $this->faker->stateAbbr(),
            'CPF' => $this->faker->randomNumber(9, true),  
            'telefone' => $this->faker->randomNumber(9, true),
            'renda'=> $this->faker->randomFloat(1, 20, 30),
            'user_id' => User::inRandomOrder()->first()->id,   
        ];
    }
}
