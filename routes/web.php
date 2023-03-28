<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminGameController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminGenreController;

use App\Http\Controllers\Admin\AdminLanguageController;
use App\Http\Controllers\Admin\AdminPlatformController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');
    Route::resource('games', AdminGameController::class);
    Route::resource('platforms', AdminPlatformController::class);
    Route::resource('languages', AdminLanguageController::class);
    Route::resource('genres', AdminGenreController::class);
});