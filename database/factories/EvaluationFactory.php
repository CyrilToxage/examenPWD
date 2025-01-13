<?php

namespace Database\Factories;

use App\Models\Evaluation;
use App\Models\Formulaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluationFactory extends Factory
{
    protected $model = Evaluation::class;

    public function definition()
    {
        return [
            'formulaire_id' => Formulaire::factory(),
        ];
    }
}
