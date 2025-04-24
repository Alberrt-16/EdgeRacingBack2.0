<?php

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\GlobalRankingController;

Route::get('/users' , function () {
    return UserResource::collection(User::all());
});


//// COMPETITIONS
Route::get('/competition/list', [CompetitionController::class, 'index'])->name('competition_list');
Route::match(['get', 'post'], '/competition/new', [CompetitionController::class, 'store'])->name('competition_new');
Route::match(['get', 'post'], '/competition/edit/{id}', [CompetitionController::class, 'update'])->name('competition_edit');
Route::get('/competition/delete/{id}', [CompetitionController::class, 'delete'])->name('competition_delete');

//// RACES
Route::get('/race/list', [RaceController::class, 'index'])->name('race_list');
Route::match(['get', 'post'], '/race/new', [RaceController::class, 'store'])->name('race_new');
Route::match(['get', 'post'], '/race/edit/{id}', [RaceController::class, 'update'])->name('race_edit');
Route::get('/race/delete/{id}', [RaceController::class, 'delete'])->name('race_delete');

//// TRACKS
Route::get('/track/list', [TrackController::class, 'index'])->name('track_list');
Route::match(['get', 'post'], '/track/new', [TrackController::class, 'store'])->name('track_new');
Route::match(['get', 'post'], '/track/edit/{id}', [TrackController::class, 'update'])->name('track_edit');
Route::get('/track/delete/{id}', [TrackController::class, 'delete'])->name('track_delete');

//// TEAMS
Route::get('/team/list', [TeamController::class, 'index'])->name('team_list');
Route::match(['get', 'post'], '/team/new', [TeamController::class, 'store'])->name('team_new');
Route::match(['get', 'post'], '/team/edit/{id}', [TeamController::class, 'update'])->name('team_edit');
Route::get('/team/delete/{id}', [TeamController::class, 'delete'])->name('team_delete');

//// DRIVERS
Route::get('/driver/list', [DriverController::class, 'index'])->name('driver_list');
Route::match(['get', 'post'], '/driver/new', [DriverController::class, 'store'])->name('driver_new');
Route::match(['get', 'post'], '/driver/edit/{id}', [DriverController::class, 'update'])->name('driver_edit');
Route::get('/driver/delete/{id}', [DriverController::class, 'delete'])->name('driver_delete');

//// RANKINGS
Route::get('/ranking/list', [RankingController::class, 'index'])->name('ranking_list');
Route::match(['get', 'post'], '/ranking/new', [RankingController::class, 'store'])->name('ranking_new');
Route::match(['get', 'post'], '/ranking/edit/{id}', [RankingController::class, 'update'])->name('ranking_edit');
Route::get('/ranking/delete/{id}', [RankingController::class, 'delete'])->name('ranking_delete');
Route::get('/ranking/global/drivers', [GlobalRankingController::class, 'drivers']);
Route::get('/ranking/global/teams', [GlobalRankingController::class, 'teams']);

Route::get('/saludo', function () {
    return response()->json(['mensaje' => 'Hola desde Laravel']);
});