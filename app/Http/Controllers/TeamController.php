<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index() {
        return Team::all();
    }

    public function store(Request $request) {
        return Team::create($request->all());
    }

    public function show($id) {
        return Team::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $team = Team::findOrFail($id);
        $team->update($request->all());
        return $team;
    }

    public function delete($id) {
        $team = Team::findOrFail($id);
        $team->delete();
        return response()->json(['mensaje' => 'Team deleted successfully']);
    }
}
