<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkKbmController;
use App\Http\Controllers\SuratInController;
use App\Http\Controllers\SuratOutController;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::view('/users','users');
    Route::view('/surat-masuk','surat-ins');
    Route::get('/export-surat-masuk', [SuratInController::class, 'export'])->name('export-in');
    Route::view('/surat-keluar','surat-outs');
    Route::get('/export-surat-keluar', [SuratOutController::class, 'export'])->name('export-out');
    Route::view('/sk-kbm','sk-kbms');
    Route::get('/export-sk-kbm', [SkKbmController::class, 'export'])->name('export-kbm');
});
