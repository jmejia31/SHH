<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inventario\CategoriaController;
use App\Http\Controllers\NotasAudios\NotasAudiosController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/categorias", CategoriaController::class);


//CitasMedicas

//Compras

//ExpedientesMedicos

//Inventarios

//NotasAudios
Route::resource("/Audios", NotasAudiosController::class);

//Personas

//ReportesEstadisticas

//Ventas

//Seguridad

//Empresa
