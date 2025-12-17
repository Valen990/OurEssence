<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyControllers\InicioController;
use App\Http\Controllers\MyControllers\RegistroController;
use App\Http\Controllers\MyControllers\TablaController;
use App\Http\Controllers\MyControllers\PreguntasController;
use App\Http\Controllers\MyControllers\InformacionController;

Route::get('/inicio', [InicioController::class, 'index']);
Route::get('/registro', [RegistroController::class, 'register']);
Route::get('/registros', [TablaController::class, 'table']);
Route::get('/preguntas', [PreguntasController::class, 'questions']);
Route::get('/informacion', [InformacionController::class, 'information']);