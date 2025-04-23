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
                'id' => 1,
                'name' => 'Red Bull Racing',
                'country' => 'Austria',
                'principal' => 'Christian Horner',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/d6/Red_Bull_Racing_logo.svg/1200px-Red_Bull_Racing_logo.svg.png',
                'description' => 'Equipo campeón con gran enfoque en el desarrollo aerodinámico.',
            ],
            [
                'id' => 2,
                'name' => 'Mercedes-AMG Petronas F1 Team',
                'country' => 'Germany',
                'principal' => 'Toto Wolff',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/55/Mercedes_AMG_Petronas_Formula_One_Team_Logo.svg/1200px-Mercedes_AMG_Petronas_Formula_One_Team_Logo.svg.png',
                'description' => 'Equipo alemán de Fórmula 1 dominador en la era híbrida.',
            ],
            [
                'id' => 3,
                'name' => 'Scuderia Ferrari',
                'country' => 'Italy',
                'principal' => 'Frédéric Vasseur',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/d4/Scuderia_Ferrari_Logo.svg/1200px-Scuderia_Ferrari_Logo.svg.png',
                'description' => 'El equipo más antiguo de F1, símbolo de la historia del automovilismo.',
            ],
            [
                'id' => 4,
                'name' => 'McLaren F1 Team',
                'country' => 'United Kingdom',
                'principal' => 'Andrea Stella',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/8/8b/McLaren_Racing_logo.svg/1200px-McLaren_Racing_logo.svg.png',
                'description' => 'Equipo británico histórico con múltiples campeonatos.',
            ],
            [
                'id' => 5,
                'name' => 'Aston Martin Aramco F1 Team',
                'country' => 'United Kingdom',
                'principal' => 'Mike Krack',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Aston_Martin_Formula_One_Team_Logo.svg/1200px-Aston_Martin_Formula_One_Team_Logo.svg.png',
                'description' => 'Equipo con fuerte inversión reciente y grandes ambiciones.',
            ],
            [
                'id' => 6,
                'name' => 'Alpine F1 Team',
                'country' => 'France',
                'principal' => 'Bruno Famin',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/0d/Alpine_F1_Team_Logo.svg/1200px-Alpine_F1_Team_Logo.svg.png',
                'description' => 'Equipo de Renault con enfoque en rendimiento y desarrollo.',
            ],
            [
                'id' => 7,
                'name' => 'Williams Racing',
                'country' => 'United Kingdom',
                'principal' => 'James Vowles',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/3/32/Williams_Grand_Prix_Engineering_logo.svg/1200px-Williams_Grand_Prix_Engineering_logo.svg.png',
                'description' => 'Histórico equipo británico en proceso de reconstrucción.', // ID: 7
            ],
            [
                'id' => 8,
                'name' => 'Stake F1 Team Kick Sauber',
                'country' => 'Switzerland',
                'principal' => 'Alessandro Alunni Bravi',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/59/Stake_F1_Team_Kick_Sauber_logo.svg/1200px-Stake_F1_Team_Kick_Sauber_logo.svg.png',
                'description' => 'Equipo suizo que prepara su transformación en Audi F1 Team.', // ID: 8
            ],
            [
                'id' => 9,
                'name' => 'Visa Cash App RB',
                'country' => 'Italy',
                'principal' => 'Laurent Mekies',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Visa_Cash_App_RB_logo.svg/1200px-Visa_Cash_App_RB_logo.svg.png',
                'description' => 'Equipo filial de Red Bull con sede en Faenza.', // ID: 9
            ],
            [
                'id' => 10,
                'name' => 'Haas F1 Team',
                'country' => 'United States',
                'principal' => 'Ayao Komatsu',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f9/Haas_F1_Team_logo.svg/1200px-Haas_F1_Team_logo.svg.png',
                'description' => 'Único equipo estadounidense de la parrilla, propiedad de Gene Haas.', // ID: 10
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
