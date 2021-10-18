<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BookingController;
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
})->name('welcome');

Route::get('/reserva-ok', function () {
    return view('reserva-ok');
})->name('reserva-ok');

Route::get('/reserva-ko', function () {
    return view('reserva-ko');
})->name('reserva-ko');

Route::post('/resultados', [ActivityController::class, 'index'])->name('resultados');

Route::post('/reservar', [BookingController::class, 'create'])->name('reservar');

Route::get('/resultados', function () {
    return view('welcome');
});

