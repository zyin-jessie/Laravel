<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name'  => $this->faker->lastName(),
            'middle_initial' => $this->faker->randomLetter(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password123'),
            'contact' => $this->faker->phoneNumber(),
            'college' => 'College of Informatics and Computer Science',
            'program' => 'Information Technology',
            'deleted_at' => null,
        ];
    }
}
