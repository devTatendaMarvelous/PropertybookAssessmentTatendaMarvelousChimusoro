<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           
           'title'=>'Refreshing Design',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita voluptatum eum explicabo qui sit quidem op explicabo qui sit quidem op explicabo qui sit quidem op',
           
        ];
    }
}
