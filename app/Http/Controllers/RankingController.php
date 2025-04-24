<?php

namespace App\Http\Controllers;

use App\Models\Ranking;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function index() {
        return Ranking::all();
    }

    public function store(Request $request) {
        return Ranking::create($request->all());
    }

    public function show($id) {
        return Ranking::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $ranking = Ranking::findOrFail($id);
        $ranking->update($request->all());
        return $ranking;
    }

    public function delete($id) {
        $ranking = Ranking::findOrFail($id);
        $ranking->delete();
        return response()->json(['mensaje' => 'Ranking deleted successfully']);
    }
}
