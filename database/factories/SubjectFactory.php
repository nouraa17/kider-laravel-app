<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subjectName' => $this->faker->word,
            'teacherId' => function () {
                return \App\Models\Teacher::factory()->create()->id;
            },
            'price' => $this->faker->randomFloat(2, 10, 100),
            'age' => $this->faker->numberBetween(5, 18),
            'time' => $this->faker->time,
            'capacity' => $this->faker->numberBetween(10, 50),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
