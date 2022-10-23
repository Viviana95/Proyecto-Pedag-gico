<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MeanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->name(),
            'language_id' => $this->faker->sentence(),
            'format' => $this->faker->sentence(1,100),            
            'file' => $this->faker->sentence(1,100),
            'image'=>$this->faker->imageUrl(640,480),
        ];
    }
}
