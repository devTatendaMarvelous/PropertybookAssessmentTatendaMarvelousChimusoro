<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->name(),
            'description'=>$this->faker->paragraph(),
            'price'=>$this->faker->numberBetween(0,200),
            'feature1'=>$this->faker->name(),
            'feature2'=>$this->faker->name(),
            'feature3'=>$this->faker->name(),
            'feature4'=>$this->faker->name(),
        ];
    }
}
