<?php

namespace Database\Seeders;

use App\Models\Race;
use App\Models\Track;
use App\Models\Competition;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class RaceSeeder extends Seeder
{
    public function run(): void
    {
        $competitions = Competition::all();
        $tracks = Track::all();

        $races = [
            [
                'name' => 'Grand Prix de Mónaco',
                'date' => '2025-05-25',
                'start_time' => '14:00:00',
                'laps' => 78,
                'description' => 'Carrera icónica en las calles del principado.',
            ],
            [
                'name' => '24 Horas de Le Mans',
                'date' => '2025-06-15',
                'start_time' => '16:00:00',
                'laps' => 300,
                'description' => 'Resistencia legendaria durante 24 horas.',
            ],
            [
                'name' => 'Indy 500',
                'date' => '2025-05-26',
                'start_time' => '12:00:00',
                'laps' => 200,
                'description' => 'Una de las carreras más famosas de EE. UU.',
            ],
            [
                'name' => 'GP de Japón',
                'date' => '2025-10-06',
                'start_time' => '08:00:00',
                'laps' => 53,
                'description' => 'Carrera en Suzuka, clave para el campeonato.',
            ],
            [
                'name' => 'GP de Brasil',
                'date' => '2025-11-10',
                'start_time' => '14:00:00',
                'laps' => 71,
                'description' => 'Una de las carreras más emocionantes del calendario.',
            ],
        ];

        foreach ($races as $index => $raceData) {
            Race::create([
                ...$raceData,
                'competition_id' => $competitions->random()->id,
                'track_id' => $tracks[$index % $tracks->count()]->id, // Rota entre tracks
            ]);
        }
    }
}
