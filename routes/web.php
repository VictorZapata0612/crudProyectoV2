<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/estudiante', [EstudianteController::class, 'index'])
->name('estudiante.index');

Route::get('/estudiante/crear', [EstudianteController::class, 'create'])
->name('estudiante.create');

Route::post('/estudiante/crear', [EstudianteController::class, 'store'])
->name('estudiante.store');*/

Route::resource('estudiante', EstudianteController::class);