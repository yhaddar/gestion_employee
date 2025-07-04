<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formation>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "employee_id" => fake()->numberBetween(2, 21),
            "nom" => fake()->name(),
            "description" => fake()->paragraph(),
            "date_debut" => fake()->date(),
            "date_fin" => fake()->date()
        ];
    }
}
