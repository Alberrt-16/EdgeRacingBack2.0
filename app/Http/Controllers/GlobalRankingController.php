<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Team;

class GlobalRankingController extends Controller
{
    public function drivers()
    {
        $ranking = Driver::with(['rankings', 'team'])->get()->map(function ($driver) {
            return [
                'driver' => $driver->name,
                'team' => $driver->team->name ?? 'Sin equipo',
                'points' => $driver->rankings->sum('points'),
            ];
        })->sortByDesc('points')->values();

        return response()->json($ranking);
    }

    public function teams()
    {
        $ranking = Team::with(['drivers.rankings'])->get()->map(function ($team) {
            $totalPoints = $team->drivers->flatMap->rankings->sum('points');
            return [
                'team' => $team->name,
                'points' => $totalPoints,
            ];
        })->sortByDesc('points')->values();

        return response()->json($ranking);
    }
}
