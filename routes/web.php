<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyControllers\InicioController;
use App\Http\Controllers\MyControllers\RegistroController;
use App\Http\Controllers\MyControllers\TablaController;
use App\Http\Controllers\MyControllers\PreguntasController;
use App\Http\Controllers\MyControllers\InformacionController;

Route::get('/Inicio', [InicioController::class, 'index']);
Route::get('/Registro', [RegistroController::class, 'register']);
Route::get('/Registros', [TablaController::class, 'table']);
Route::get('/Preguntas', [PreguntasController::class, 'questions']);
Route::get('/Informacion', [InformacionController::class, 'information']);