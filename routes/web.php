<?php

use App\Http\Controllers\CRUDCarController;
use App\Http\Controllers\CRUDEmployeeController;
use Illuminate\Support\Facades\Route;
use App\Models\Car;
use App\Http\Controllers\CarController;
use App\Models\Brand;
use App\Http\Controllers\BrandController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\PDFController;

use App\Models\User;
use App\Http\Controllers\UserController;
use App\Models\ChiNhanh;
use App\Http\Controllers\ChiNhanhController;



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
Route::get('/dashboard', [CarController::class, 'index'])->name('dashboard')->middleware('auth');;
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


Route::post('/download_pdf', [PDFController::class, 'downloadPDF'])->name('download_pdf');
=======

Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom');
Route::get('registrationUser', [UserController::class, 'registrationUser'])->name('register-user');
Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [UserController::class, 'signOut'])->name('signout');
Route::post('registration', [UserController::class, 'customRegistration'])->name('register.customs');

Route::get('list', [UserController::class, 'listUser'])->name('user.list');
Route::get('create', [UserController::class, 'createUser'])->name('createUser');
Route::get('edit-user/{id}', [UserController::class, 'editUser'])->name('edit.user');
Route::get('update-user/{id}', [UserController::class, 'updateUser'])->name('update.user');
Route::get('delete', [UserController::class, 'deleteUser'])->name('crud_user.deleteUser');


Route::get('viewUSer', [UserController::class, 'readUser'])->name('view.user');

Route::get('listCN', [ChiNhanhController::class, 'listChiNhanh'])->name('CN.list');
Route::get('registration', [ChiNhanhController::class, 'registration'])->name('register-CN');
Route::post('CN-registration', [ChiNhanhController::class, 'ChiNhanhRegistration'])->name('register.CN');
Route::get('edit-CN/{id}', [ChiNhanhController::class, 'editChiNhanh'])->name('edit.CN');
Route::get('update-CN/{id}', [ChiNhanhController::class, 'updateChiNhanh'])->name('update.CN');
Route::get('deleteCN', [ChiNhanhController::class, 'deleteChiNhanh'])->name('crud_CN.deleteCN');


Route::get('view', [ChiNhanhController::class, 'readChiNhanh'])->name('view.ChiNhanh');


Route::get('/', function () {
    return view('welcome');
});
Route::get('car-types', [CRUDCarController::class, 'listCartp'])->name('view');
Route::get('create', [CRUDCarController::class, 'create'])->name('car-types.create');
Route::get('addcartype', [CRUDCarController::class, 'create'])->name('addcartype');
Route::post('addcartype', [CRUDCarController::class, 'store'])->name('carsstore');
Route::get('edit/{id}', [CRUDCarController::class, 'edit'])->name('edit');
Route::put('update/{carType}', [CRUDCarController::class, 'update'])->name('update');
Route::delete('deletecar/{id}', [CRUDCarController::class, 'deleteCar'])->name('deleteCar');


Route::get('employee', [CRUDEmployeeController::class, 'listEmp'])->name('viewEmp');
Route::get('addeployee', [CRUDEmployeeController::class, 'create'])->name('employees.create');
Route::post('addeployee', [CRUDEmployeeController::class, 'store'])->name('employees.store');
Route::get('employees/{id}/edit', [CRUDEmployeeController::class, 'edit'])->name('employees.edit');
Route::put('employees/{employee}', [CRUDEmployeeController::class, 'update'])->name('employees.update');
Route::delete('delete/{id}', [CRUDEmployeeController::class, 'deleteEmp'])->name('deleteEmp');