<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
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
            'client_id'=>Client::inRandomOrder()->first()->id,
            'amount'=>fake()->randomFloat(2,10,1000),
            'status'=>fake()->randomElement(['Processing', 'Shipped', 'Delivered', 'Returns']),
            'date'=>fake()->dateTimeBetween('2023-01-01','now')->format('Y-m-d'),
        ];
    }
}
