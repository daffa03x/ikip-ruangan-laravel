<?php

use App\Http\Controllers\AngkatanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RuanganController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/logout',[LoginController::class,'logout']);

Route::group(['middleware' => ['role:Admin|Pegawai']],function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
        Route::resource('/angkatan',AngkatanController::class);
        Route::resource('/fakultas',FakultasController::class);
        Route::resource('/prodi',ProdiController::class);
        Route::resource('/ruangan',RuanganController::class);
    });
});

