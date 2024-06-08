<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterielController;


Route::get('/', [MaterielController::class, 'index'])->name('materiels.index');
// Materiels routes
Route::get('/admin/materiels/{materiel}', [MaterielController::class, 'show'])->name('materiels.show');
Route::get('/admin/materiels', [MaterielController::class, 'index'])->name('materiels.index');
Route::get('/materiels/create', [MaterielController::class, 'create'])->name('materiels.create');
Route::post('/admin/materiels', [MaterielController::class, 'store'])->name('materiels.store');
Route::get('/admin/materiels/{materiel}/edit', [MaterielController::class, 'edit'])->name('materiels.edit');
Route::put('/admin/materiels/{materiel}', [MaterielController::class, 'update'])->name('materiels.update');
Route::delete('/admin/materiels/{materiel}', [MaterielController::class, 'destroy'])->name('materiels.destroy');

// routes/web.php

use App\Http\Controllers\EmployerController;

// Explicit routes for each action
Route::get('/employers', [EmployerController::class, 'index'])->name('employers.index');
Route::get('/employers/creat', [EmployerController::class, 'create'])->name('employer.create');
Route::post('/employers', [EmployerController::class, 'store'])->name('employers.store');
Route::get('/employers/{noms}', [EmployerController::class, 'show'])->name('employers.show');
Route::get('/employers/{noms}/edit', [EmployerController::class, 'edit'])->name('employers.edit');
Route::put('/employers/{noms}', [EmployerController::class, 'update'])->name('employers.update');
Route::delete('/employers/{noms}', [EmployerController::class, 'destroy'])->name('employers.destroy');