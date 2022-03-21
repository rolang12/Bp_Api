<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'categories_id' => $this->faker->numberBetween(1, 9),
            'articles_id' => $this->faker->numberBetween(1, 30)
            
        ];
    }
}
