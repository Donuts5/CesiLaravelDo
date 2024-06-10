<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => Str::random(30),
            'model' => Str::random(50),
            'registration' => Str::random(7),
            'serial_number' => Str::random(35),
            'fiscal_power' => fake()->randomDigit(),
            'circulation_date' => fake()->date(),
        ];
    }
}
