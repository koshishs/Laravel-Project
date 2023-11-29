<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GameProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(25),
            'console' => $this->faker->randomElement(['PS5', 'Xbox', 'PC'], 1),
            'price' => $this->faker->randomFloat(2, 50, 999),
        ];
    }
}
