<?php

use App\Http\Controllers\CRUDCarController;
use App\Http\Controllers\CRUDEmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', [CRUDCarController::class, 'index'])->name('dashboard');
Route::get('car-types', [CRUDCarController::class, 'listCartp'])->name('view');
Route::get('create', [CRUDCarController::class, 'create'])->name('car-types.create');
Route::get('addcar', [CRUDCarController::class, 'create'])->name('addcar');
Route::post('addcar', [CRUDCarController::class, 'store'])->name('cars.store');
Route::get('edit/{id}', [CRUDCarController::class, 'edit'])->name('edit');
Route::put('update/{carType}', [CRUDCarController::class, 'update'])->name('update');
Route::delete('deletecar/{id}', [CRUDCarController::class, 'deleteCar'])->name('deleteCar');


Route::get('employee', [CRUDEmployeeController::class, 'listEmp'])->name('viewEmp');
Route::get('addeployee', [CRUDEmployeeController::class, 'create'])->name('employees.create');
Route::post('addeployee', [CRUDEmployeeController::class, 'store'])->name('employees.store');
Route::get('employees/{id}/edit', [CRUDEmployeeController::class, 'edit'])->name('employees.edit');
Route::put('employees/{employee}', [CRUDEmployeeController::class, 'update'])->name('employees.update');
Route::delete('delete/{id}', [CRUDEmployeeController::class, 'deleteEmp'])->name('deleteEmp');