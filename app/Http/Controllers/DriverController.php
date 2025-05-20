<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index() {
        return Driver::orderByDesc('points')->get();
    }

    public function store(Request $request) {
        return Driver::create($request->all());
    }

    public function show($id) {
        return Driver::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $driver = Driver::findOrFail($id);
        $driver->update($request->all());
        return $driver;
    }

    public function delete($id) {
        $driver = Driver::findOrFail($id);
        $driver->delete();
        return response()->json(['mensaje' => 'Driver deleted successfully']);
    }
}
