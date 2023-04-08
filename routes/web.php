<?php

use App\Events\MessageNotification;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserGamesController;
use App\Http\Controllers\User\UserGameController;
use App\Http\Controllers\Admin\AdminGameController;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Auth\CustomAuthController;
use App\Http\Controllers\Admin\AdminGenreController;
use App\Http\Controllers\Admin\AdminLanguageController;
use App\Http\Controllers\Admin\AdminPlatformController;
use App\Http\Controllers\welcome\WelcomePageController;

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
Route::get('/', [WelcomePageController::class, 'index'])->name('home');

Route::get('/lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::prefix('admin')->name('admin.')->group(function (){
    Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');
    Route::resource('games', AdminGameController::class);
    Route::resource('platforms', AdminPlatformController::class);
    Route::resource('languages', AdminLanguageController::class);
    Route::resource('genres', AdminGenreController::class);
});
Route::get('/logout',[CustomAuthController::class, 'logout'])->name('logout');
});
Route::prefix('user')->name('user.')->group(function (){
    Route::resource('games', UserGameController::class)->only(['index', 'show']);
});
Route::middleware('guest')->group(function () {
Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
Route::get('/registration', [CustomAuthController::class, 'registration'])->name('registration');
Route::post('/register-user',[CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class, 'loginUser'])->name('login-user');
});
Route::get('/user-game/{game}/add',[UserGamesController::class, 'add'])->name('user-game');
Route::delete('/user-card-destroy/{game}',[UserGamesController::class, 'destroy'])->name('cart-destroy');

Route::get('/event', function(){
    event(new MessageNotification('This is our first broadcast message!'));
});
Route::get('/listen', function(){
    return view('listen');
});