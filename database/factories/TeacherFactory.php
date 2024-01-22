<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullName' => $this->faker->name,
            'designation' => $this->faker->jobTitle,
            'image' => $this->faker->imageUrl(),
            'fb' => $this->faker->url,
            'tw' => $this->faker->url,
            'inst' => $this->faker->url,
        ];
    }
}
