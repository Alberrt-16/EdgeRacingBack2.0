<?php

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
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
Route::get('/competition/show/{id}', [CompetitionController::class, 'show'])->name('competition_show');

//// RACES
Route::get('/race/list', [RaceController::class, 'index'])->name('race_list');
Route::match(['get', 'post'], '/race/new', [RaceController::class, 'store'])->name('race_new');
Route::match(['get', 'post'], '/race/edit/{id}', [RaceController::class, 'update'])->name('race_edit');
Route::get('/race/delete/{id}', [RaceController::class, 'delete'])->name('race_delete');
Route::get('/race/show/{id}', [RaceController::class, 'show'])->name('race_show');

//// TRACKS
Route::get('/track/list', [TrackController::class, 'index'])->name('track_list');
Route::match(['get', 'post'], '/track/new', [TrackController::class, 'store'])->name('track_new');
Route::match(['get', 'post'], '/track/edit/{id}', [TrackController::class, 'update'])->name('track_edit');
Route::get('/track/delete/{id}', [TrackController::class, 'delete'])->name('track_delete');
Route::get('/track/show/{id}', [TrackController::class, 'show'])->name('track_show');

//// TEAMS
Route::get('/team/list', [TeamController::class, 'index'])->name('team_list');
Route::match(['get', 'post'], '/team/new', [TeamController::class, 'store'])->name('team_new');
Route::match(['get', 'post'], '/team/edit/{id}', [TeamController::class, 'update'])->name('team_edit');
Route::get('/team/delete/{id}', [TeamController::class, 'delete'])->name('team_delete');
Route::get('/team/show/{id}', [TeamController::class, 'show'])->name('team_show');

//// DRIVERS
Route::get('/driver/list', [DriverController::class, 'index'])->name('driver_list');
Route::match(['get', 'post'], '/driver/new', [DriverController::class, 'store'])->name('driver_new');
Route::match(['get', 'post'], '/driver/edit/{id}', [DriverController::class, 'update'])->name('driver_edit');
Route::get('/driver/delete/{id}', [DriverController::class, 'delete'])->name('driver_delete');
Route::get('/driver/show/{id}', [DriverController::class, 'show'])->name('driver_show');

//// RANKINGS
Route::get('/ranking/list', [RankingController::class, 'index'])->name('ranking_list');
Route::match(['get', 'post'], '/ranking/new', [RankingController::class, 'store'])->name('ranking_new');
Route::match(['get', 'post'], '/ranking/edit/{id}', [RankingController::class, 'update'])->name('ranking_edit');
Route::get('/ranking/delete/{id}', [RankingController::class, 'delete'])->name('ranking_delete');
Route::get('/ranking/global/drivers', [GlobalRankingController::class, 'drivers']);
Route::get('/ranking/global/teams', [GlobalRankingController::class, 'teams']);
Route::get('/ranking/show/{id}', [RankingController::class, 'show'])->name('ranking_show');

//// USERS
Route::get('/user/list', [UserController::class, 'index'])->name('user_list');
Route::match(['get', 'post'], '/user/new', [UserController::class, 'store'])->name('user_new');
Route::match(['get', 'post'], '/user/edit/{id}', [UserController::class, 'update'])->name('user_edit');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user_delete');
Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user_show');

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Credenciales incorrectas'], 401);
    }

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'access_token' => $token,
        'token_type' => 'Bearer',
        'user' => $user,
    ]);
});

Route::middleware('auth:sanctum')->post('/logout', function (Request $request) {
    $request->user()->currentAccessToken()->delete();
    return response()->json(['message' => 'Sesión cerrada']);
});



Route::get('/saludo', function () {
    return response()->json(['mensaje' => 'niga']);
});