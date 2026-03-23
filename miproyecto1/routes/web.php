<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\SuperHeroController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/start', function () {
    return view('index');
});


Route::get('/suma', function () {
    return view('suma');
});

Route::get('/suma', [SumaController::class, 'show']);
Route::post('/suma', [SumaController::class, 'calcular']);

Route::get('/superheroes', [SuperHeroController::class, 'index']);


