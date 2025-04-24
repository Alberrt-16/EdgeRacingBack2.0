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
                'name' => 'Red Bull Racing',
                'country' => 'Austria',
                'principal' => 'Christian Horner',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/d6/Red_Bull_Racing_logo.svg/1200px-Red_Bull_Racing_logo.svg.png',
                'description' => 'Equipo campeón con gran enfoque en el desarrollo aerodinámico.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Mercedes-AMG Petronas F1 Team',
                'country' => 'Germany',
                'principal' => 'Toto Wolff',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/55/Mercedes_AMG_Petronas_Formula_One_Team_Logo.svg/1200px-Mercedes_AMG_Petronas_Formula_One_Team_Logo.svg.png',
                'description' => 'Equipo alemán de Fórmula 1 dominador en la era híbrida.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Scuderia Ferrari',
                'country' => 'Italy',
                'principal' => 'Frédéric Vasseur',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/d4/Scuderia_Ferrari_Logo.svg/1200px-Scuderia_Ferrari_Logo.svg.png',
                'description' => 'El equipo más antiguo de F1, símbolo de la historia del automovilismo.',
                'competition_id' => 1,
            ],
            [
                'name' => 'McLaren F1 Team',
                'country' => 'United Kingdom',
                'principal' => 'Andrea Stella',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/8/8b/McLaren_Racing_logo.svg/1200px-McLaren_Racing_logo.svg.png',
                'description' => 'Equipo británico histórico con múltiples campeonatos.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Aston Martin Aramco F1 Team',
                'country' => 'United Kingdom',
                'principal' => 'Mike Krack',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Aston_Martin_Formula_One_Team_Logo.svg/1200px-Aston_Martin_Formula_One_Team_Logo.svg.png',
                'description' => 'Equipo con fuerte inversión reciente y grandes ambiciones.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Alpine F1 Team',
                'country' => 'France',
                'principal' => 'Bruno Famin',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/0d/Alpine_F1_Team_Logo.svg/1200px-Alpine_F1_Team_Logo.svg.png',
                'description' => 'Equipo de Renault con enfoque en rendimiento y desarrollo.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Williams Racing',
                'country' => 'United Kingdom',
                'principal' => 'James Vowles',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/3/32/Williams_Grand_Prix_Engineering_logo.svg/1200px-Williams_Grand_Prix_Engineering_logo.svg.png',
                'description' => 'Histórico equipo británico en proceso de reconstrucción.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Stake F1 Team Kick Sauber',
                'country' => 'Switzerland',
                'principal' => 'Alessandro Alunni Bravi',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/59/Stake_F1_Team_Kick_Sauber_logo.svg/1200px-Stake_F1_Team_Kick_Sauber_logo.svg.png',
                'description' => 'Equipo suizo que prepara su transformación en Audi F1 Team.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Visa Cash App RB',
                'country' => 'Italy',
                'principal' => 'Laurent Mekies',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Visa_Cash_App_RB_logo.svg/1200px-Visa_Cash_App_RB_logo.svg.png',
                'description' => 'Equipo filial de Red Bull con sede en Faenza.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Haas F1 Team',
                'country' => 'United States',
                'principal' => 'Ayao Komatsu',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f9/Haas_F1_Team_logo.svg/1200px-Haas_F1_Team_logo.svg.png',
                'description' => 'Único equipo estadounidense de la parrilla, propiedad de Gene Haas.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Ducati Lenovo Team',
                'country' => 'Italy',
                'principal' => 'Luigi Dall\'Igna',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/f/fd/Ducati_logo.svg/1200px-Ducati_logo.svg.png',
                'description' => 'Equipo oficial de Ducati, dominantes en las últimas temporadas.',
                'competition_id' => 2,
            ],
            [
                'name' => 'Aprilia Racing',
                'country' => 'Italy',
                'principal' => 'Massimo Rivola',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f7/Aprilia_logo.svg/1200px-Aprilia_logo.svg.png',
                'description' => 'Equipo de fábrica con una gran evolución reciente.',
                'competition_id' => 2,
            ],
            [
                'name' => 'Monster Energy Yamaha MotoGP',
                'country' => 'Japan',
                'principal' => 'Lin Jarvis',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/e/e4/Yamaha_Motor_Racing_logo.svg/1200px-Yamaha_Motor_Racing_logo.svg.png',
                'description' => 'Equipo de fábrica de Yamaha, campeones recientes.',
                'competition_id' => 2,
            ],
            [
                'name' => 'Red Bull KTM Factory Racing',
                'country' => 'Austria',
                'principal' => 'Francesco Guidotti',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/4/4e/KTM_logo.svg/1200px-KTM_logo.svg.png',
                'description' => 'Equipo oficial de KTM con fuerte desarrollo tecnológico.',
                'competition_id' => 2,
            ],
            [
                'name' => 'GASGAS Factory Racing Tech3',
                'country' => 'Spain',
                'principal' => 'Nicolas Goyon',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/GasGas_logo.svg/1200px-GasGas_logo.svg.png',
                'description' => 'Equipo vinculado a KTM, enfocado en jóvenes talentos.',
                'competition_id' => 2,
            ],
            [
                'name' => 'Pramac Racing',
                'country' => 'Italy',
                'principal' => 'Gino Borsoi',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/06/Pramac_Racing_logo.svg/1200px-Pramac_Racing_logo.svg.png',
                'description' => 'Equipo satélite de Ducati con gran rendimiento.',
                'competition_id' => 2,
            ],
            [
                'name' => 'Gresini Racing MotoGP',
                'country' => 'Italy',
                'principal' => 'Nadia Padovani',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/de/Gresini_Racing_logo.svg/1200px-Gresini_Racing_logo.svg.png',
                'description' => 'Histórico equipo con motos Ducati, conocido por su espíritu independiente.',
                'competition_id' => 2,
            ],
            [
                'name' => 'VR46 Racing Team',
                'country' => 'Italy',
                'principal' => 'Alessio Salucci',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/4/42/VR46_Racing_Team_logo.svg/1200px-VR46_Racing_Team_logo.svg.png',
                'description' => 'Equipo fundado por Valentino Rossi, usando motos Ducati.',
                'competition_id' => 2,
            ],
            [
                'name' => 'Trackhouse Racing',
                'country' => 'United States',
                'principal' => 'Davide Brivio',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Trackhouse_Racing_logo.svg/1200px-Trackhouse_Racing_logo.svg.png',
                'description' => 'Nuevo equipo en MotoGP que reemplaza a RNF, con motos Aprilia.',
                'competition_id' => 2,
            ],
            [
                'name' => 'LCR Honda',
                'country' => 'Monaco',
                'principal' => 'Lucio Cecchinello',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/1/15/LCR_Honda_logo.svg/1200px-LCR_Honda_logo.svg.png',
                'description' => 'Equipo independiente con motos Honda y gran trayectoria en MotoGP.',
                'competition_id' => 2,
            ],
            [
                'name' => 'Repsol Honda Team',
                'country' => 'Japan',
                'principal' => 'Alberto Puig',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/0c/Repsol_Honda_Team_logo.svg/1200px-Repsol_Honda_Team_logo.svg.png',
                'description' => 'Histórico equipo japonés, campeón con pilotos como Marc Márquez.',
                'competition_id' => 2,
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
