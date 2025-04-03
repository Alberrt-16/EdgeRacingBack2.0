<?php

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Route;

Route::get('/users' , function () {
    return UserResource::collection(User::all());
});


Route::get('/saludo', function () {
    return response()->json(['mensaje' => 'Hola desde Laravel']);
});