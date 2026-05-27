<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\PaginaController;

Route::get('/', [CarreraController::class, 'index']);
Route::get('/carreras', [CarreraController::class, 'index']);
Route::get('/carreras', [CarreraController::class, 'carreras']);
Route::get('/carrera/{slug}', [CarreraController::class, 'show']);
Route::get('/nosotros', [PaginaController::class, 'nosotros']);
Route::get('/admision', [PaginaController::class, 'admision']);
Route::get('/contacto', [PaginaController::class, 'contacto']);