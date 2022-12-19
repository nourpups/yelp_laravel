<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organisation>
 */
class OrganisationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            return [
                'legal_name' => fake()->unique()->name(),
                'description' => fake()->text(),
                'source' => fake()->text(),
                'inn' => fake()->name(),
                'location' => fake()->name(),
                'head_person_name' => fake()->name(),
            ];
    }
}
