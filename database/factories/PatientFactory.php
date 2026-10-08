<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Patient>
 */
class PatientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'student_id' => fake()->unique()->numerify('20##-#####'),
            'name' => fake()->name(),
            'course' => fake()->randomElement(['BSIT', 'BSCS', 'BSN', 'BSBA', 'BSED', 'BSCE']),
            'year_level' => fake()->numberBetween(1, 4),
        ];
    }
}
