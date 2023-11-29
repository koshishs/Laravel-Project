<?php

namespace Database\Factories;

use App\Models\BookProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'title' => $this->faker->text(25),
                'firstname' => $this->faker->firstName(),
                'surname' => $this->faker->lastName(),
                'price' => $this->faker->randomFloat(2, 50, 999),
                'pages' => $this->faker->numberBetween(55, 999),
            ];
    }
}
