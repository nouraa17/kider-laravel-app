<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'guardianName' => $this->faker->name,
            'guardianEmail' => $this->faker->email,
            'childName' => $this->faker->name,
            'childAge' => $this->faker->numberBetween(1, 18), // Assuming child age is between 1 and 18
            'message' => $this->faker->sentence,
        ];
    }
}
