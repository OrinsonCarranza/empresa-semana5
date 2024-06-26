<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\PersonaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personas', [PersonaController::class, 'index'])->name('personas.index');
Route::get('/contacto', function () {
    return view('contacto'); 
})->name('contacto');