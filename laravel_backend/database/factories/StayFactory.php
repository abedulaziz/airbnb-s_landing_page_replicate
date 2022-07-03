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
            "location" => fake()->city(),
            "category_id" => fake()->numberBetween(1, 10),
            "gallery_id" => fake()->numberBetween(1, 20),
            "distance" => fake()->randomNumber(4, false),
            "cost_per_night" => fake()->randomNumber(3, true),
            "rate" => fake()->numberBetween(1, 5),
            "favorited" => fake()->randomNumber(5, false),
            "region" => fake()->randomElement(['flexible' ,'middle_east', 'italy', 'united_states', 'france']),
        ];
    }
}
