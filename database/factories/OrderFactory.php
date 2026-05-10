<?php

namespace Database\Factories;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_produk' => fake()->word(),
            'customer_id' => Customer::inRandomOrder()->first()->id,
            'jumlah' => fake()->numberBetween(1, 100),
            'total_harga' => fake()->numberBetween(10000, 1000000000),
            'status' => fake()->randomElement(['pending', 'proses', 'selesai', 'batal']),
            'pembayaran' => fake()->randomElement(['cash', 'credit_card', 'bank_transfer']),
            'pengiriman' => fake()->randomElement(['reguler', 'express', 'instant']),
        ];
    }
}