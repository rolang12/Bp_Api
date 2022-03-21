<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'file' => $this->faker->realTextBetween(10, 20),
            'articles_id' => $this->faker->numberBetween(1, 10),

        ];
    }
}
