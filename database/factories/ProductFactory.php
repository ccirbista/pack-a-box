<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'length'=> $this->faker->randomFloat(1, 10, 30),//generating random floating number between 10 to 30 with one number after decimal point
            'width'=> $this->faker->randomFloat(1, 10, 30),
            'height'=> $this->faker->randomFloat(1, 10, 30),
        ];
    }

    
}