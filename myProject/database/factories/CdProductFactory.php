<?php

namespace Database\Factories;

use App\Models\CdProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class CdProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CdProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'title' => $this->faker->text(20),
                'firstname' => $this->faker->firstName(),
                'band' => $this->faker->lastName(),
                'price' => $this->faker->randomFloat(2, 50, 400),
                'playlength' => $this->faker->numberBetween(1, 250),
        ];
    }
}
