<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peticion>
 */
class PeticionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => fake()->text( maxNbChars: 30),
            'descripcion'=> fake()->text( maxNbChars: 50),
            'item'=> fake()->numberBetween(1, 10),
            'cantidad'=> fake()->numberBetween(1, 10),
            'cantidad'=> fake()->numberBetween(1, 0),
            'time'=> fake()->time(),
            'date'=> fake()->date()

        ];
    }
}
