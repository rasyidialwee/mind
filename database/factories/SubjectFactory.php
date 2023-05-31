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
            'name' => fake('ms_MY')->name(),
            'description' => fake('ms_MY')->paragraph(),
            'score' => random_int(2, 100),
            'status' => fake('ms_MY')->randomElement([true, false]),
        ];
    }
}
