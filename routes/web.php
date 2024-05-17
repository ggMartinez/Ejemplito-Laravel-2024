<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VapoController;

Route::get("/", [VapoController::class, 'Listar']);

Route::get('/insertar', function () {
    return view('insertar');
});

Route::post('/insertar', [VapoController::class, 'Insertar']);

Route::get('/modificar/{id}',[VapoController::class, 'MostrarFormularioDeEdicion']);
Route::post('/modificar',[VapoController::class, 'Modificar']);

Route::get('/eliminar/{id}', [VapoController::class, 'Eliminar']);