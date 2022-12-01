<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           
           'heading'=>'Our team comes with the experience and knowledge',
            'who_we_are'=>'It is a long established fact that a reader wll be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.
There are many variations of the passages of Lorem Ipsum available available, but the majority have in some form, by injected humour. ',
            'vision'=>$this->faker->paragraph(),
            'mission'=>$this->faker->paragraph(),
        ];
    }
}
