<?php

namespace Database\Factories;

use App\Models\Evaluation;
use App\Models\Question;
use App\Models\Reponse;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReponseFactory extends Factory
{
    protected $model = Reponse::class;

    public function definition()
    {
        return [
            'contenu' => $this->faker->sentence,
            'evaluation_id' => Evaluation::factory(),
            'question_id' => Question::factory(),
        ];
    }
}
