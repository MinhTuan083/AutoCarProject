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
Route::get('/', function () {
    return view('welcome');
});
