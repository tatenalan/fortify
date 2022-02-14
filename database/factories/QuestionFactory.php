<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [           
            'form_id' => $this->faker->numberBetween(1,36), // randomElement([1,2])
            'description' => $this->faker->sentence(30) // word(30) o text(250)
        ];
    }
}
