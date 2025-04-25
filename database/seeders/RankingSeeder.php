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
        $races = Race::with('competition')->get(); // Aseguramos que traiga también la competición
        $drivers = Driver::all();

        foreach ($races as $race) {
            $participants = $drivers;

            foreach ($participants as $position => $driver) {
                $didNotFinish = fake()->boolean(10); // 10% chance de DNF
                $isFastLap = fake()->boolean(5);     // 5% chance vuelta rápida
                $driver = Driver::where('competition_id', $race->competition_id);

                Ranking::create([
                    'race_id' => $race->id,
                    'competition_id' => $race->competition_id, // Aquí se incluye la competición
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
