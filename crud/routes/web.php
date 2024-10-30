<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

Route::get("/", [CrudController::class, "index"])->name("crud.index");

//Ruta para añadir un nuevo usuario
Route::post("/Registrar-usuario", [CrudController::class, "create"])->name("crud.create");

//Ruta para modificar un usuario
Route::post("/modificar-usuario", [CrudController::class, "update"])->name("crud.update");

//Ruta para eliminar un usuario
Route::get("/eliminar-usuario--{id}", [CrudController::class, "delete"])->name("crud.delete");

//ruta para asociar la tabla llamada bam
Route::get('/bam', [bamController::class, 'index'])->name('bam.index');