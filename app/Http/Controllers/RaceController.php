<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    public function index() {
        return Race::all();
    }

    public function store(Request $request) {
        return Race::create($request->all());
    }

    public function show($id) {
        return Race::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $race = Race::findOrFail($id);
        $race->update($request->all());
        return $race;
    }

    public function delete($id) {
        $race = Race::findOrFail($id);
        $race->delete();
        return response()->json(['mensaje' => 'Race deleted successfully']);
    }
}