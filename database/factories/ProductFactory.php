<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->unique()->name(),
            'price'=>fake()->randomFloat(2,70,1000),
            'stock'=>fake()->numberBetween(0,100),
            'description'=>fake()->text(),
            'categorie_id' => Categorie::inRandomOrder()->first()->id,
            
        ];
    }
}
