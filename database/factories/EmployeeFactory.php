<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom" => fake()->firstName(),
            "prenom" => fake()->lastName(),
            "email" => fake()->email(),
            "post" => fake()->randomElement(["developpement mobile", "developpement web", "UI/UX", "chef de project"]),
            "date_embauche" => fake()->date("Y-m-d"),
            "salaire" => fake()->numberBetween(3000, 12000)
        ];
    }
}
