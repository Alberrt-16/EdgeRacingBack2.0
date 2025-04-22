<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index() {
        return Competition::all();
    }

    public function store(Request $request) {
        return Competition::create($request->all());
    }

    public function show($id) {
        return Competition::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $competition = Competition::findOrFail($id);
        $competition->update($request->all());
        return $competition;
    }

    public function delete($id) {
        $competition = Competition::findOrFail($id);
        $competition->delete();
        return response()->json(['mensaje' => 'Competition deleted successfully']);
    }
}
