<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Box;

class BoxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'length'=> $this->faker->randomFloat(1, 10, 30),
            'width'=> $this->faker->randomFloat(1, 10, 30),
            'height'=> $this->faker->randomFloat(1, 10, 30),
        ];
    }

    
}
