<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/account/admin', [UserController::class, 'admin'])->name('user.admin');
Route::get('/account/client', [UserController::class, 'client'])->name('user.client');
Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/service/cities', [ServiceController::class, 'getCities'])->name('service.cities');
Route::get('/service/fee', [ServiceController::class, 'calFeeOrder'])->name('service.fee');
