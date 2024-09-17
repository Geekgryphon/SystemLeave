<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CityAreaController;

Route::get('/cities', [CityController::class, 'index'])->name('cities.index');
Route::get('/cities/create', [CityController::class, 'create'])->name('cities.create');
Route::post('/cities', [CityController::class, 'store'])->name('cities.store');
Route::get('/cities/{id}/edit', [CityController::class, 'edit'])->name('cities.edit');
Route::post('/cities/{id}', [CityController::class, 'update'])->name('cities.update');
Route::delete('/cities/{id}', [CityController::class, 'destroy'])->name('cities.destroy');

Route::get('/cityareas', [CityAreaController::class, 'index'])->name('cityareas.index');
Route::get('/cityareas/create', [CityAreaController::class, 'create'])->name('cityareas.create');
Route::post('/cityareas', [CityAreaController::class, 'store'])->name('cityareas.store');
Route::get('/cityareas/{id}/edit', [CityAreaController::class, 'edit'])->name('cityareas.edit');
Route::post('/cityareas/{id}', [CityAreaController::class, 'update'])->name('cityareas.update');
Route::delete('/cityareas/{id}', [CityAreaController::class, 'destroy'])->name('cityareas.destroy');


Route::get('/', function () {
    return view('welcome');
});
