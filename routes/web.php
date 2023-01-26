<?php

use App\Http\Controllers\ReportController;
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


Route::get('/orders', [ReportController::class, 'orderReport'])->name('order.report');
Route::get('/orders-items/{id}', [ReportController::class, 'orderItems'])->name('order.items');
Route::get('/top-distributors', [ReportController::class, 'topDistributors'])->name('top.distributors');
