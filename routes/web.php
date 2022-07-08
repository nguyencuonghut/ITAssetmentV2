<?php

use App\Http\Controllers\AdminAreasController;
use App\Http\Controllers\AdminCategoriesController;
use App\Http\Controllers\AdminDepartmentsController;
use App\Http\Controllers\AdminManufacturersController;
use App\Http\Controllers\AdminSuppliersController;
use App\Http\Controllers\AdminUsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
});

Route::name('admin.')->prefix('admin')->group(function() {
    Route::group(['middleware'=>'auth'], function() {
        Route::get('users/data', [AdminUsersController::class, 'anyData'])->name('users.data');
        Route::resource('users', AdminUsersController::class);

        Route::get('departments/data', [AdminDepartmentsController::class, 'anyData'])->name('departments.data');
        Route::resource('departments', AdminDepartmentsController::class);

        Route::get('areas/data', [AdminAreasController::class, 'anyData'])->name('areas.data');
        Route::resource('areas', AdminAreasController::class);

        Route::get('categories/data', [AdminCategoriesController::class, 'anyData'])->name('categories.data');
        Route::resource('categories', AdminCategoriesController::class);

        Route::get('manufacturers/data', [AdminManufacturersController::class, 'anyData'])->name('manufacturers.data');
        Route::resource('manufacturers', AdminManufacturersController::class);

        Route::get('suppliers/data', [AdminSuppliersController::class, 'anyData'])->name('suppliers.data');
        Route::resource('suppliers', AdminSuppliersController::class);
    });
});
