<?php

use App\Http\Controllers\AngkatanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/logout',[LoginController::class,'logout']);

Route::group(['middleware' => ['role:Admin|Pegawai']],function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
        Route::get('/ruangan',[HomeController::class,'ruangan'])->name('ruangan');
        Route::resource('/angkatan',AngkatanController::class);
    });
});

