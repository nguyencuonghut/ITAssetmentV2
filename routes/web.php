<?php

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
    });
});
