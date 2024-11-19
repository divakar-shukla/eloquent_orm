<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name"=> fake()->name(),
            "phone"=> fake()->text(),
            "age"=> fake()->numberBetween(10, 40),
            "email"=> fake()->unique()->safeEmail(),
        ];
    }
}
