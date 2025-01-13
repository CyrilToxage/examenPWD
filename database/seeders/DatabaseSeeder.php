<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Module;
use App\Models\Formulaire;
use App\Models\Question;
use App\Models\Evaluation;
use App\Models\Reponse;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Créer 5 administrateurs
        User::factory()->count(5)->state(['role' => 'admin'])->create();

        // Créer 10 utilisateurs
        User::factory()->count(10)->create();

        // Créer 5 modules avec des formulaires, questions, évaluations et réponses
        Module::factory()
            ->count(5)
            ->has(
                Formulaire::factory()
                    ->count(3)
                    ->has(
                        Question::factory()
                            ->count(5)
                    )
                    ->has(
                        Evaluation::factory()
                            ->count(2)
                            ->has(
                                Reponse::factory()
                                    ->count(5)
                            )
                    )
            )
            ->create();
    }
}
