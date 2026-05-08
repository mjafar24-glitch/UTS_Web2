<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'alamat' => fake()->address(),
            'email' => fake()->email(),
            'no_hp' => fake()->phoneNumber(),
            'status' => fake()->randomElement(['active', 'inactive']),
        ];
    }
}