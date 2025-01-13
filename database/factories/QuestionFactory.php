<?php

namespace Database\Factories;

use App\Models\Formulaire;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition()
    {
        return [
            'contenu' => $this->faker->sentence,
            'type' => $this->faker->randomElement(['text', 'multiple_choice', 'boolean']),
            'formulaire_id' => Formulaire::factory(),
        ];
    }
}
