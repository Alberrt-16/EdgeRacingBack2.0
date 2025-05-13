<?php

namespace Database\Seeders;

use App\Models\Race;
use App\Models\Driver;
use App\Models\Ranking;
use App\Models\TeamRanking;
use App\Models\DriverRanking;
use App\Models\GlobalRanking;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RankingSeeder extends Seeder
{
    public function run(): void
{ 
    $races = Race::with('competition')->get();

    foreach ($races as $race) {
        $drivers = Driver::where('competition_id', $race->competition_id)->get();

        foreach ($drivers as $position => $driver) {
            $didNotFinish = fake()->boolean(10); // 10% chance de DNF
            $isFastLap = fake()->boolean(5);     // 5% chance de vuelta rápida
            $points = $didNotFinish ? 0 : max(0, 25 - ($position * 2));

            $ranking = Ranking::create([
                'race_id' => $race->id,
                'competition_id' => $race->competition_id,
                'driver_id' => $driver->id,
                'position' => $didNotFinish ? null : $position + 1,
                'points' => $points,
                'fastLap' => $isFastLap,
                'did_not_finish' => $didNotFinish,
                'notes' => $didNotFinish ? 'Abandono por problemas técnicos' : null,
            ]);

            DriverRanking::firstOrCreate([
                'driver_id' => $driver->id,
                'ranking_id' => $ranking->id,
                'race_id' => $race->id,
            ])->increment('total_points', $points);
    
            // Ranking acumulado del equipo (TeamRanking)
            if ($driver->team_id) {
                TeamRanking::firstOrCreate([
                    'team_id' => $driver->team_id,
                    'ranking_id' => $ranking->id,
                    'race_id' => $race->id,
                ])->increment('total_points', $points);
            }
        }
    } 
}
}
