<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprovalStatusController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CityAreaController;
use App\Http\Controllers\CityStreetController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobHistoryController;
use App\Http\Controllers\JobPositionController;
use App\Http\Controllers\LeaveFormController;
use App\Http\Controllers\LeaveKindController;
use App\Http\Controllers\SignStateController;

Route::resource('approvalstatus', ApprovalStatusController::class);

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

Route::get('/citystreets', [CityStreetController::class, 'index'])->name('citystreets.index');
Route::get('/citystreets/create', [CityStreetController::class, 'create'])->name('citystreets.create');
Route::post('/citystreets', [CityStreetController::class, 'store'])->name('citystreets.store');
Route::get('/citystreets/{id}/edit', [CityStreetController::class, 'edit'])->name('citystreets.edit');
Route::post('/citystreets/{id}', [CityStreetController::class, 'update'])->name('citystreets.update');
Route::delete('/citystreets/{id}', [CityStreetController::class, 'destroy'])->name('citystreets.destroy');

Route::resource('employees', EmployeeController::class);
Route::resource('jobhistorys', JobHistoryController::class);
Route::resource('jobpositions', JobPositionController::class);
Route::resource('leaveforms', LeaveFormController::class);
Route::resource('leave-kinds', LeaveKindController::class);
Route::resource('signstates', SignStateController::class);


Route::get('/', function () {
    return view('welcome');
});
