<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => fake()->randomElement(['shell', 'bp', 'texaco', 'm&s']),
            'status' => fake()->randomElement(['free', 'broken', 'being_used']),
            'address' => fake()->address,
            'long' => fake()->longitude,
            'lat' => fake()->latitude,
        ];
    }
}
