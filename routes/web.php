<?php

use App\Http\Controllers\AdminActivityLogsController;
use App\Http\Controllers\AdminAreasController;
use App\Http\Controllers\AdminAssetModelsController;
use App\Http\Controllers\AdminAssetsController;
use App\Http\Controllers\AdminCategoriesController;
use App\Http\Controllers\AdminDepartmentsController;
use App\Http\Controllers\AdminEmployeesController;
use App\Http\Controllers\AdminManufacturersController;
use App\Http\Controllers\AdminSuppliersController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\UserActivityLogsController;
use App\Http\Controllers\UserAssetsController;
use App\Http\Controllers\UserHomeController;
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

        Route::get('models/data', [AdminAssetModelsController::class, 'anyData'])->name('models.data');
        Route::resource('models', AdminAssetModelsController::class);

        Route::get('employees/data', [AdminEmployeesController::class, 'anyData'])->name('employees.data');
        Route::resource('employees', AdminEmployeesController::class);

        Route::get('assets/data', [AdminAssetsController::class, 'anyData'])->name('assets.data');
        Route::resource('assets', AdminAssetsController::class);
        Route::get('assets/changeStatus/{id}', [AdminAssetsController::class, 'getChangeStatus'])->name('assets.getChangeStatus');
        Route::patch('assets/changeStatus/{id}', [AdminAssetsController::class, 'updateStatus'])->name('assets.updateStatus');
    });
});

Route::get('assets/data', [UserAssetsController::class, 'anyData'])->name('assets.data');
Route::get('assets/{id}', [UserAssetsController::class, 'show'])->name('assets.show');
Route::get('assets', [UserAssetsController::class, 'index'])->name('assets.index');
Route::get('assets/createQR/{id}', [UserAssetsController::class, 'createQR'])->name('assets.createQR');

Route::get('logs/data', [UserActivityLogsController::class, 'anyData'])->name('logs.data');

Route::get('/', [UserHomeController::class, 'home'])->name('home');

