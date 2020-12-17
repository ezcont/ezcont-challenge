<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;
    public function definition()
    {
        return [
            'id' => $this->faker->numerify(),
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2),
            'amount_available' => $this->faker->randomFloat(2),
            'amount_critical' => $this->faker->randomFloat(2)
        ];
    }
}
