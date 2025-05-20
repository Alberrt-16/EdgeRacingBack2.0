<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index() {
        return Team::orderByDesc('points')->get();
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'points' => 'nullable|integer|min:0',
            'country' => 'nullable|string|max:100',
            // agrega más reglas según tu tabla
        ]);
    
        $team = Team::create($validated);
    
        return response()->json($team, 201);
    }
    
    public function update(Request $request, $id) {
        $team = Team::findOrFail($id);
    
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'points' => 'sometimes|integer|min:0',
            'country' => 'sometimes|string|max:100',
            // igual que en store, pero con "sometimes"
        ]);
    
        $team->update($validated);
    
        return response()->json($team);
    }
    

    public function show($id) {
        return Team::findOrFail($id);
    }


    public function delete($id) {
        $team = Team::findOrFail($id);
        $team->delete();
        return response()->json(['mensaje' => 'Team deleted successfully']);
    }

    public function driversGrouped()
{
    $teams = Team::with('drivers')->get()->map(function ($team) {
        return [
            'team' => $team->name,
            'drivers' => $team->drivers->map(function ($driver) {
                return [
                    'id' => $driver->id,
                    'name' => $driver->first_name . ' ' . $driver->last_name,
                    'points' => $driver->points,
                ];
            }),
        ];
    });

    return response()->json($teams);
}
}
