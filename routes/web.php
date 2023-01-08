<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', 'App\Http\Controllers\Controller@home' )->name('home');
Route::post('/reserve', 'App\Http\Controllers\Controller@reserve' )->name('reserve');
Route::get('/logout', 'App\Http\Controllers\Controller@logout' )->name('logout')->middleware('auth');
Route::get('/dashboard','App\Http\Controllers\Controller@dashboard')->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', 'App\Http\Controllers\AdminController@admin')->name('admin');
    Route::resource('/categories', 'App\Http\Controllers\CategoryController');
    Route::resource('/reservation', 'App\Http\Controllers\ReservationController');
    Route::resource('/menu', 'App\Http\Controllers\MenuController');
    Route::resource('/table', 'App\Http\Controllers\TableController');
});


require __DIR__.'/auth.php';
