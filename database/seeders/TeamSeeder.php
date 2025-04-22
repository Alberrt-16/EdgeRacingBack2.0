<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Mercedes-AMG Petronas F1 Team',
                'country' => 'Germany',
                'principal' => 'Toto Wolff',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/55/Mercedes_AMG_Petronas_Formula_One_Team_Logo.svg/1200px-Mercedes_AMG_Petronas_Formula_One_Team_Logo.svg.png',
                'description' => 'Equipo alemán de Fórmula 1 dominador en la era híbrida.',
            ],
            [
                'name' => 'Red Bull Racing',
                'country' => 'Austria',
                'principal' => 'Christian Horner',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/d6/Red_Bull_Racing_logo.svg/1200px-Red_Bull_Racing_logo.svg.png',
                'description' => 'Equipo campeón con gran enfoque en el desarrollo aerodinámico.',
            ],
            [
                'name' => 'Scuderia Ferrari',
                'country' => 'Italy',
                'principal' => 'Frédéric Vasseur',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/d4/Scuderia_Ferrari_Logo.svg/1200px-Scuderia_Ferrari_Logo.svg.png',
                'description' => 'El equipo más antiguo de F1, símbolo de la historia del automovilismo.',
            ],
            [
                'name' => 'McLaren F1 Team',
                'country' => 'United Kingdom',
                'principal' => 'Andrea Stella',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/8/8b/McLaren_Racing_logo.svg/1200px-McLaren_Racing_logo.svg.png',
                'description' => 'Equipo británico histórico con múltiples campeonatos.',
            ],
            [
                'name' => 'Aston Martin Aramco F1 Team',
                'country' => 'United Kingdom',
                'principal' => 'Mike Krack',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Aston_Martin_Formula_One_Team_Logo.svg/1200px-Aston_Martin_Formula_One_Team_Logo.svg.png',
                'description' => 'Equipo con fuerte inversión reciente y grandes ambiciones.',
            ],
            [
                'name' => 'Alpine F1 Team',
                'country' => 'France',
                'principal' => 'Bruno Famin',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/0d/Alpine_F1_Team_Logo.svg/1200px-Alpine_F1_Team_Logo.svg.png',
                'description' => 'Equipo de Renault con enfoque en rendimiento y desarrollo.',
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
