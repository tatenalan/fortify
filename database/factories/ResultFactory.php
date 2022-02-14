<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Form;
use App\Models\Answer;
use App\Models\User;

class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'user_id' => User::all()->random()->id,
           'answer_id' => Answer::all()->random()->id,
           'form_id' => Form::all()->random()->id
        ];
    }
}
