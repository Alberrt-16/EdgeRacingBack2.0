<?php

namespace Database\Seeders;

use App\Models\Race;
use App\Models\Driver;
use App\Models\Ranking;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RankingSeeder extends Seeder
{
    public function run(): void
    {
        $races = Race::all();
        $drivers = Driver::all();

        foreach ($races as $race) {
            // Seleccionamos aleatoriamente entre 10 y 15 pilotos para cada carrera
            $participants = $drivers->random(rand(1, max: $drivers->count()))->values();

            foreach ($participants as $position => $driver) {
                $didNotFinish = fake()->boolean(10); // 10% de posibilidades de abandonar
                $isFastLap = fake()->boolean(5);     // 5% de ser la vuelta rápida

                Ranking::create([
                    'race_id' => $race->id,
                    'driver_id' => $driver->id,
                    'position' => $didNotFinish ? null : $position + 1,
                    'points' => $didNotFinish ? 0 : max(0, 25 - ($position * 2)),
                    'fastLap' => $isFastLap,
                    'did_not_finish' => $didNotFinish,
                    'notes' => $didNotFinish ? 'Abandono por problemas técnicos' : null,
                ]);
            }
        }
    }
}
