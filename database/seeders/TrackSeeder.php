<?php

namespace Database\Seeders;

use App\Models\Track;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TrackSeeder extends Seeder
{
    public function run(): void
    {
        $tracks = [
            [
                'name' => 'Circuit de Monaco',
                'country' => 'Monaco',
                'location' => 'Monte Carlo',
                'length' => 3.337,
                'turns' => 19,
                'image' => 'monaco.png',
                'description' => 'Famoso circuito urbano, conocido por su dificultad y glamour.',
            ],
            [
                'name' => 'Silverstone Circuit',
                'country' => 'United Kingdom',
                'location' => 'Silverstone',
                'length' => 5.891,
                'turns' => 18,
                'image' => 'silverstone.png',
                'description' => 'Uno de los circuitos más antiguos y rápidos de la Fórmula 1.',
            ],
            [
                'name' => 'Suzuka Circuit',
                'country' => 'Japan',
                'location' => 'Suzuka',
                'length' => 5.807,
                'turns' => 18,
                'image' => 'suzuka.png',
                'description' => 'Conocido por su diseño en "8", uno de los favoritos de los pilotos.',
            ],
            [
                'name' => 'Autodromo Nazionale Monza',
                'country' => 'Italy',
                'location' => 'Monza',
                'length' => 5.793,
                'turns' => 11,
                'image' => 'monza.png',
                'description' => 'Templo de la velocidad con grandes rectas y chicanes técnicas.',
            ],
            [
                'name' => 'Circuit de Spa-Francorchamps',
                'country' => 'Belgium',
                'location' => 'Stavelot',
                'length' => 7.004,
                'turns' => 20,
                'image' => 'spa.png',
                'description' => 'Uno de los trazados más completos y desafiantes del mundo.',
            ],
        ];

        foreach ($tracks as $track) {
            Track::create($track);
        }
    }
}