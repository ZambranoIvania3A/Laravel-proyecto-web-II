<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JornadaLaboral;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JornadaLaboral>
 */
class JornadaLaboralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo' => $this->faker->word,
            'horas' => $this->faker->numberBetween(1, 40), 
        ];
    }
}
