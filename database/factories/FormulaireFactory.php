<?php

namespace Database\Factories;

use App\Models\Formulaire;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormulaireFactory extends Factory
{
    protected $model = Formulaire::class;

    public function definition()
    {
        return [
            'date_creation' => $this->faker->date,
            'module_id' => Module::factory(),
        ];
    }
}
