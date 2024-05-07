<?php

use Illuminate\Support\Facades\Route;
use App\Models\Car;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/dashboard', [CarController::class, 'index'])->name('dashboard');
Route::get('/addcar', [CarController::class, 'AddCar'])->name('addcar');
Route::post('/addcar', [CarController::class, 'storeCar'])->name('cars.store');
Route::get('/list', [CarController::class, 'listCar'])->name('list');
Route::get('/show/{id}', [CarController::class, 'showCar'])->name('cars.show');
Route::delete('delete/{id}', [CarController::class, 'deleteCar'])->name('cars.delete');
Route::get('edit-car/{id}', [CarController::class, 'editCar'])->name('cars.edit');
Route::put('update-car/{id}', [CarController::class, 'updateCar'])->name('cars.update');




Route::get('/', function () {
    return view('welcome');
});
