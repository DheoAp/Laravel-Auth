<?php

use App\Http\Controllers\UserAuthController;
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
    return view('welcome');
});

Route::get('login',[UserAuthController::class, 'login'])->middleware('Sudahlogin');
Route::get('daftar',[UserAuthController::class, 'daftar'])->middleware('Sudahlogin');
Route::post('buat',[UserAuthController::class, 'buat'])->name('auth.buat');
Route::post('cek',[UserAuthController::class, 'cekLogin'])->name('auth.cek');

Route::get('profile',[UserAuthController::class, 'profile'])->middleware('Ceklogin');
Route::get('keluar',[UserAuthController::class, 'keluar']);