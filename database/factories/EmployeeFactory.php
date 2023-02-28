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
    public function definition()
    {
        return [
            'first_name' => fake() ->firstname(),
            'last_name' => fake()->firstname(),
            'gender' => fake()->randomElement(['Male, Female']), 
            'age' => fake()->numberBetween($min = 18, $max = 40),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
