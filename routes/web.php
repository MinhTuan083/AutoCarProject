<?php

use App\Http\Controllers\CRUDCarController;
use App\Http\Controllers\CRUDEmployeeController;
use Illuminate\Support\Facades\Route;
use App\Models\Car;
use App\Http\Controllers\CarController;
use App\Models\Brand;
use App\Http\Controllers\BrandController;

<<<<<<< HEAD
use App\Http\Controllers\CartController;
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
Route::get('/listcar', [CarController::class, 'listCar'])->name('listcar');
Route::get('/showcar/{id}', [CarController::class, 'showCar'])->name('cars.show');
Route::delete('delete-car/{id}', [CarController::class, 'deleteCar'])->name('cars.delete');
Route::get('edit-car/{id}', [CarController::class, 'editCar'])->name('cars.edit');
Route::put('update-car/{id}', [CarController::class, 'updateCar'])->name('cars.update');

Route::get('/addbrand', [BrandController::class, 'addBrand'])->name('addbrand');
Route::post('/addbrand', [BrandController::class, 'storeBrand'])->name('brands.store');
Route::get('/listbrand', [BrandController::class, 'listBrand'])->name('listbrand');
Route::get('/showbrand/{id}', [BrandController::class, 'showBrand'])->name('brands.show');
Route::get('edit-brand/{id}', [BrandController::class, 'editBrand'])->name('brands.edit');
Route::post('update-brand/{id}', [BrandController::class, 'updateBrand'])->name('brands.update');
Route::delete('delete-brand/{id}', [BrandController::class, 'deleteBrand'])->name('brands.delete');



//Cart
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');
Route::get('/viewThanhToan', [CartController::class, 'viewThanhToan'])->name('viewThanhToan');

//Hóa đơn
Route::post('/viewHoaDon', [CartController::class, 'viewHoaDon'])->name('viewHoaDon');

=======
>>>>>>> Car-Categories
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
Route::delete('delete/{id}', [CRUDCarController::class, 'deleteCar'])->name('delete');


Route::get('employee', [CRUDEmployeeController::class, 'listEmp'])->name('viewEmp');
Route::get('addeployee', [CRUDEmployeeController::class, 'create'])->name('employees.create');
Route::post('addeployee', [CRUDEmployeeController::class, 'store'])->name('employees.store');
Route::get('employees/{id}/edit', [CRUDEmployeeController::class, 'edit'])->name('employees.edit');
Route::put('employees/{employee}', [CRUDEmployeeController::class, 'update'])->name('employees.update');
Route::delete('delete/{id}', [CRUDEmployeeController::class, 'deleteEmp'])->name('deleteEmp');