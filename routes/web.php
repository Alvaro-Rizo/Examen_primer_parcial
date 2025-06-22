<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MensajeController;

Route::get('/mensaje/{nombre}', [MensajeController::class, 'mensajePersonalizado']);
Route::get('/saludo-hora', [MensajeController::class, 'mensajeHora']);
Route::get('/saludo-repetido/{veces}', [MensajeController::class, 'saludoRepetido']);





use App\Http\Controllers\CursoController;

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/create', [CursoController::class, 'create']);
Route::get('/cursos/{nombre}/{duracion}/{categoria}', [CursoController::class, 'show']);
Route::get('/cursos/{nombre}/{duracion}/{categoria}/edit', [CursoController::class, 'edit']);