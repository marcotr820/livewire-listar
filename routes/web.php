<?php

use App\Http\Controllers\trabajadorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [trabajadorController::class, 'index']);
Route::get('trabajadores/create', [trabajadorController::class, 'create'])->name('trabajadores.create');
Route::post('trabajadores', [trabajadorController::class, 'store'])->name('trabajador.store');

Route::get('usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::get('datatable', [UserController::class, 'listar_datatable'])->name('datatable.index');
Route::get('ajax_datatable', [UserController::class, 'ajax_datatable'])->name('ajax_datatable.index');
Route::get('ajax', [UserController::class, 'ajax']);