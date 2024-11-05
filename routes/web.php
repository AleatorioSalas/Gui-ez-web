<?php

use App\Http\Controllers\BamController;
use App\Http\Controllers\celularController;
use App\Http\Controllers\computadorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\monitorController;
use App\Http\Controllers\simcardController;

Route::get("/", [CrudController::class, "index"])->name("crud.index");

//Ruta para añadir un nuevo usuario
Route::post("/Registrar-usuario", [CrudController::class, "create"])->name("crud.create");

//Ruta para modificar un usuario
Route::post("/modificar-usuario", [CrudController::class, "update"])->name("crud.update");

//Ruta para eliminar un usuario
Route::get("/eliminar-usuario--{id}", [CrudController::class, "delete"])->name("crud.delete");

//Ruta para enlace de bam
Route::get('/bam', [BamController::class, 'showBam'])->name('bam.index');

//Ruta para enlace de celular
Route::get('/celular', [CelularController::class, 'showCelular'])->name('celular.index');

//Ruta para enlace de celular
Route::get('/monitor', [monitorController::class, 'showmonitor'])->name('monitor.index');

//Ruta para enlace de celular
Route::get('/simcard', [simcardController::class, 'showsimcard'])->name('simcard.index');

//Ruta para enlace de celular
Route::get('/computador', [computadorController::class, 'showcomputador'])->name('computador.index');