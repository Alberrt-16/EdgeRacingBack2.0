<?php

namespace Database\Seeders;

use App\Models\Competition;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompetitionSeeder extends Seeder
{
    public function run(): void
    {
        $competitions = [
            [
                'name' => 'Formula 1',
                'description' => 'Campeonato mundial de monoplazas organizado por la FIA.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/3/33/F1.svg/1200px-F1.svg.png',
                'status' => 'active',
            ],
            [
                'name' => 'World Rally Championship (WRC)',
                'description' => 'El campeonato mundial de rallies más importante.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/55/WRC_logo.svg/1200px-WRC_logo.svg.png',
                'status' => 'active',
            ],
            [
                'name' => 'FIA World Endurance Championship (WEC)',
                'description' => 'Carreras de resistencia como las 24h de Le Mans.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/c/c0/FIA_World_Endurance_Championship_logo.svg/1200px-FIA_World_Endurance_Championship_logo.svg.png',
                'status' => 'active',
            ],
            [
                'name' => 'IndyCar Series',
                'description' => 'Competición estadounidense de monoplazas.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/b/b0/IndyCar_Series_logo.svg/1200px-IndyCar_Series_logo.svg.png',
                'status' => 'active',
            ],
            [
                'name' => 'NASCAR Cup Series',
                'description' => 'Principal campeonato de automovilismo en óvalos en EE.UU.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/NASCAR_Cup_Series_logo.svg/2560px-NASCAR_Cup_Series_logo.svg.png',
                'status' => 'active',
            ],
            [
                'name' => 'Formula E',
                'description' => 'Campeonato de monoplazas eléctricos de la FIA.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/8/89/Formula_E_logo.svg/1200px-Formula_E_logo.svg.png',
                'status' => 'active',
            ],
            [
                'name' => 'DTM (Deutsche Tourenwagen Masters)',
                'description' => 'Campeonato alemán de turismos.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/DTM_Logo.svg/2560px-DTM_Logo.svg.png',
                'status' => 'inactive',
            ],
        ];

        foreach ($competitions as $competition) {
            Competition::create($competition);
        }
    }
}
