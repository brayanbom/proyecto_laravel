<?php

use App\Http\Controllers\RegionController;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});




Route::get('mostrar', [RegionController::class, 'edit'])->name('mostrar'); 

Route::post('crear', [RegionController::class, 'crear'])->name('crear');
Route::post('eliminar', [RegionController::class, 'eliminar'])->name('eliminar');
Route::get('crears', [RegionController::class, 'crears'])->name('crears');


Route::post('insertars', [SitioController::class, 'insertars'])->name('insertars');
Route::delete('eliminars/{id}', [SitioController::class, 'eliminars'])->name('eliminars');
Route::get('edits/{id}', [SitioController::class, 'edits'])->name('edits');
Route::put('updates/{id}', [SitioController::class, 'updates'])->name("updates");
Route::get('sitios_turisticos/{id}', [SitioController::class, 'show'])->name('sitios_turisticos');


Route::post('asignar_rol', [UserController::class, 'asignarrol'])->name('asignar_rol'); 
Route::post('quitar_rol', [UserController::class, 'quitarRol'])->name('quitar_rol'); 
Route::post('eliminarUsuario', [UserController::class, 'eliminarUsuario'])->name('eliminarUsuario'); 



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [RegionController::class, 'index'])->name('dashboard');
});
