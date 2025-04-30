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
            /* [
                'name' => 'Australian Grand Prix',
                'date' => '2025-03-16',
                'start_time' => '06:00:00',
                'laps' => 58,
                'description' => 'Carrera inaugural en Melbourne.',
                'competition_id' => 1, // Fórmula 1
                'track_id' => 1, // Albert Park Circuit 
            ],
            [
                'name' => 'Chinese Grand Prix',
                'date' => '2025-03-23',
                'start_time' => '08:00:00',
                'laps' => 56,
                'description' => 'Gran Premio en el Circuito Internacional de Shanghái.',
                'competition_id' => 1,
                'track_id' => 2, // Shanghai International Circuit
            ],
            [
                'name' => 'Bahrain Grand Prix',
                'date' => '2025-04-13',
                'start_time' => '17:00:00',
                'laps' => 57,
                'description' => 'Carrera nocturna en Sakhir.',
                'competition_id' => 1,
                'track_id' => 3, // Bahrain International Circuit
            ],
            [
                'name' => 'Saudi Arabian Grand Prix',
                'date' => '2025-04-20',
                'start_time' => '20:00:00',
                'laps' => 50,
                'description' => 'Gran Premio en las calles de Jeddah.',
                'competition_id' => 1,
                'track_id' => 4, // Jeddah Street Circuit
            ],
            [
                'name' => 'Miami Grand Prix',
                'date' => '2025-05-04',
                'start_time' => '21:00:00',
                'laps' => 57,
                'description' => 'Carrera en el circuito urbano de Miami.',
                'competition_id' => 1,
                'track_id' => 5, // Miami International Autodrome
            ],
            [
                'name' => 'Emilia Romagna Grand Prix',
                'date' => '2025-05-18',
                'start_time' => '15:00:00',
                'laps' => 63,
                'description' => 'Gran Premio en Imola.',
                'competition_id' => 1,
                'track_id' => 6, // Imola Circuit
            ],
            [
                'name' => 'Monaco Grand Prix',
                'date' => '2025-05-25',
                'start_time' => '14:00:00',
                'laps' => 78,
                'description' => 'Carrera icónica en las calles del principado.',
                'competition_id' => 1,
                'track_id' => 7, // Circuit de Monaco
            ],
            [
                'name' => 'Spanish Grand Prix',
                'date' => '2025-06-01',
                'start_time' => '15:00:00',
                'laps' => 66,
                'description' => 'Gran Premio en Barcelona.',
                'competition_id' => 1,
                'track_id' => 8, // Circuit de Barcelona-Catalunya
            ],
            [
                'name' => 'Canadian Grand Prix',
                'date' => '2025-06-15',
                'start_time' => '20:00:00',
                'laps' => 70,
                'description' => 'Carrera en Montreal.',
                'competition_id' => 1,
                'track_id' => 9, // Circuit Gilles Villeneuve
            ],
            [
                'name' => 'Austrian Grand Prix',
                'date' => '2025-06-29',
                'start_time' => '15:00:00',
                'laps' => 71,
                'description' => 'Gran Premio en Spielberg.',
                'competition_id' => 1,
                'track_id' => 10, // Red Bull Ring
            ],
            [
                'name' => 'British Grand Prix',
                'date' => '2025-07-06',
                'start_time' => '16:00:00',
                'laps' => 52,
                'description' => 'Carrera en Silverstone.',
                'competition_id' => 1,
                'track_id' => 11, // Silverstone Circuit
            ],
            [
                'name' => 'Belgian Grand Prix',
                'date' => '2025-07-27',
                'start_time' => '15:00:00',
                'laps' => 44,
                'description' => 'Gran Premio en Spa-Francorchamps.',
                'competition_id' => 1,
                'track_id' => 12, // Circuit de Spa-Francorchamps
            ],
            [
                'name' => 'Hungarian Grand Prix',
                'date' => '2025-08-03',
                'start_time' => '15:00:00',
                'laps' => 70,
                'description' => 'Carrera en Budapest.',
                'competition_id' => 1,
                'track_id' => 13, // Hungaroring
            ],
            [
                'name' => 'Dutch Grand Prix',
                'date' => '2025-08-31',
                'start_time' => '15:00:00',
                'laps' => 72,
                'description' => 'Gran Premio en Zandvoort.',
                'competition_id' => 1,
                'track_id' => 14, // Circuit Zandvoort
            ],
            [
                'name' => 'Italian Grand Prix',
                'date' => '2025-09-07',
                'start_time' => '15:00:00',
                'laps' => 53,
                'description' => 'Carrera en Monza.',
                'competition_id' => 1,
                'track_id' => 15,
            ],
            [
                'name' => 'Azerbaijan Grand Prix',
                'date' => '2025-09-21',
                'start_time' => '13:00:00',
                'laps' => 51,
                'description' => 'Carrera urbana en Bakú con largas rectas y curvas técnicas.',
                'competition_id' => 1,
                'track_id' => 16, // Baku City Circuit
            ],
            [
                'name' => 'Singapore Grand Prix',
                'date' => '2025-10-05',
                'start_time' => '14:00:00',
                'laps' => 61,
                'description' => 'Gran Premio nocturno por las calles de Marina Bay.',
                'competition_id' => 1,
                'track_id' => 17, // Marina Bay Street Circuit
            ],
            [
                'name' => 'Japanese Grand Prix',
                'date' => '2025-10-12',
                'start_time' => '07:00:00',
                'laps' => 53,
                'description' => 'Carrera clásica en Suzuka con curvas rápidas y en S.',
                'competition_id' => 1,
                'track_id' => 18, // Suzuka Circuit
            ],
            [
                'name' => 'United States Grand Prix',
                'date' => '2025-10-26',
                'start_time' => '21:00:00',
                'laps' => 56,
                'description' => 'Carrera en Austin, Texas en el Circuito de las Américas.',
                'competition_id' => 1,
                'track_id' => 19, // Circuit of the Americas
            ],
            [
                'name' => 'Mexico City Grand Prix',
                'date' => '2025-11-02',
                'start_time' => '21:00:00',
                'laps' => 71,
                'description' => 'Carrera en el Autódromo Hermanos Rodríguez.',
                'competition_id' => 1,
                'track_id' => 20, // Autódromo Hermanos Rodríguez
            ],
            [
                'name' => 'Brazilian Grand Prix',
                'date' => '2025-11-09',
                'start_time' => '17:00:00',
                'laps' => 71,
                'description' => 'Clásico en Interlagos con clima impredecible.',
                'competition_id' => 1,
                'track_id' => 21, // Interlagos
            ],
            [
                'name' => 'Las Vegas Grand Prix',
                'date' => '2025-11-22',
                'start_time' => '06:00:00',
                'laps' => 50,
                'description' => 'Carrera nocturna en el nuevo circuito de Las Vegas Strip.',
                'competition_id' => 1,
                'track_id' => 22, // Las Vegas Street Circuit
            ],
            [
                'name' => 'Abu Dhabi Grand Prix',
                'date' => '2025-12-07',
                'start_time' => '14:00:00',
                'laps' => 55,
                'description' => 'Gran final en Yas Marina, con mucha tensión por el título.',
                'competition_id' => 1,
                'track_id' => 23, // Yas Marina Circuit
            ],
            [
                'name' => 'Qatar Grand Prix',
                'date' => '2025-03-09',
                'start_time' => '16:00:00',
                'laps' => 22,
                'description' => 'Inicio de temporada en el circuito nocturno de Lusail.',
                'competition_id' => 2,
                'track_id' => 26,
            ],
            [
                'name' => 'Portuguese Grand Prix',
                'date' => '2025-03-23',
                'start_time' => '15:00:00',
                'laps' => 25,
                'description' => 'MotoGP vuelve a Portugal para una carrera llena de acción.',
                'competition_id' => 2,
                'track_id' => 32,
            ],
            [
                'name' => 'Argentine Grand Prix',
                'date' => '2025-04-06',
                'start_time' => '14:00:00',
                'laps' => 25,
                'description' => 'Carrera en el Autódromo Termas de Río Hondo.',
                'competition_id' => 2,
                'track_id' => 25,
            ],
            [
                'name' => 'Spanish Grand Prix (Jerez)',
                'date' => '2025-04-27',
                'start_time' => '14:00:00',
                'laps' => 26,
                'description' => 'Una de las citas clásicas del calendario en Jerez.',
                'competition_id' => 2,
                'track_id' => 27,
            ],
            [
                'name' => 'French Grand Prix',
                'date' => '2025-05-11',
                'start_time' => '14:00:00',
                'laps' => 27,
                'description' => 'El histórico circuito Bugatti acoge el GP de Francia.',
                'competition_id' => 2,
                'track_id' => 28,
            ],
            [
                'name' => 'Italian Grand Prix (Mugello)',
                'date' => '2025-06-01',
                'start_time' => '14:00:00',
                'laps' => 23,
                'description' => 'Velocidad pura en el circuito de Mugello.',
                'competition_id' => 2,
                'track_id' => 30,
            ],
            [
                'name' => 'German Grand Prix',
                'date' => '2025-06-15',
                'start_time' => '14:00:00',
                'laps' => 28,
                'description' => 'Intensidad al máximo en el GP de Alemania.',
                'competition_id' => 2,
                'track_id' => 33,
            ],
            [
                'name' => 'Dutch Grand Prix (Assen)',
                'date' => '2025-06-29',
                'start_time' => '14:00:00',
                'laps' => 26,
                'description' => 'La Catedral del motociclismo recibe una nueva edición del GP.',
                'competition_id' => 2,
                'track_id' => 31,
            ],
            [
                'name' => 'British Grand Prix',
                'date' => '2025-07-13',
                'start_time' => '14:00:00',
                'laps' => 20,
                'description' => 'Emoción en Silverstone para el clásico GP británico.',
                'competition_id' => 2,
                'track_id' => 11,
            ],
            [
                'name' => 'Austrian Grand Prix',
                'date' => '2025-08-17',
                'start_time' => '14:00:00',
                'laps' => 28,
                'description' => 'Velocidad en las montañas del Red Bull Ring.',
                'competition_id' => 2,
                'track_id' => 10,
            ],
            [
                'name' => 'Aragon Grand Prix',
                'date' => '2025-08-31',
                'start_time' => '14:00:00',
                'laps' => 23,
                'description' => 'MotorLand Aragón, siempre desafiante para los pilotos.',
                'competition_id' => 2,
                'track_id' => 29,
            ],
            [
                'name' => 'San Marino Grand Prix',
                'date' => '2025-09-14',
                'start_time' => '14:00:00',
                'laps' => 27,
                'description' => 'Emoción en la costa adriática italiana.',
                'competition_id' => 2,
                'track_id' => 34,
            ],
            [
                'name' => 'Japanese Grand Prix',
                'date' => '2025-09-28',
                'start_time' => '14:00:00',
                'laps' => 24,
                'description' => 'El técnico circuito de Suzuka acoge el GP de Japón.',
                'competition_id' => 2,
                'track_id' => 18,
            ],
            [
                'name' => 'Thai Grand Prix',
                'date' => '2025-10-12',
                'start_time' => '14:00:00',
                'laps' => 26,
                'description' => 'MotoGP llega a Buriram para otro GP bajo calor extremo.',
                'competition_id' => 2,
                'track_id' => 24,
            ],
            [
                'name' => 'Australian Grand Prix',
                'date' => '2025-10-26',
                'start_time' => '14:00:00',
                'laps' => 27,
                'description' => 'Escenario espectacular en Australia para MotoGP.',
                'competition_id' => 2,
                'track_id' => 1,
            ],
            [
                'name' => 'Malaysian Grand Prix',
                'date' => '2025-11-02',
                'start_time' => '14:00:00',
                'laps' => 20,
                'description' => 'La humedad del GP de Malasia siempre pone a prueba.',
                'competition_id' => 2,
                'track_id' => 35,
            ],
            [
                'name' => 'Valencia Grand Prix',
                'date' => '2025-11-16',
                'start_time' => '14:00:00',
                'laps' => 27,
                'description' => 'Gran final de temporada en el circuito Ricardo Tormo.',
                'competition_id' => 2,
                'track_id' => 36,
            ], */
                
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
