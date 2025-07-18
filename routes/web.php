<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\TamuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\TamuController as AdminTamuController;
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
    return view('index');
});


Route::post('simpan-bukutamu', [TamuController::class, 'simpanTamu'])->name('simpan-bukutamu');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('admin/tamu', [AdminTamuController::class, 'index'])->name('admin-tamu');

