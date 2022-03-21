<?php

namespace Database\Factories;

use App\Models\Articles;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class ArticleFactory extends Factory
{

   

    /**
     * Define the model's default state.
    
     * @return array
     */
    
    public function definition()
    {
        return [
            'created_at' => now(),
            'updated_at' => now(),
            'title' => $this->faker->realTextBetween(10, 20),
            'content' => $this->faker->text(),
            'user_id' => $this->faker->numberBetween(1,10),
        
        ];
    }
}
