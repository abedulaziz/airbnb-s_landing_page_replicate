<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stay>
 */
class StayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "location" => fake()->address(),
            "category_id" => 1,
            "gallery_id" => 1,
            "distance" => 1334,
            "cost" => 300,
            "rate" => 2,
            "region" => fake()->randomElement(['flexible' ,'middle_east', 'italy', 'united_states', 'france']),
        ];
    }
}
