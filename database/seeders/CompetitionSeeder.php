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
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/F1.svg/1024px-F1.svg.png',
                'status' => 'ongoing',
            ],
            [
                'name' => 'MotoGP',
                'description' => 'Campeonato mundial de motociclismo organizado por la FIM.',
                'image' => 'https://images.seeklogo.com/logo-png/22/2/motogp-logo-png_seeklogo-228834.png',
                'status' => 'ongoing',
            ],
        ];

        foreach ($competitions as $competition) {
            Competition::create($competition);
        }
    }
}
