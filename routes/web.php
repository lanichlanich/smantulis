<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SkKbmController;
use App\Http\Controllers\SkKgbController;
use App\Http\Controllers\SkPnsController;
use App\Http\Controllers\SkCpnsController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SuratInController;
use App\Http\Controllers\SkNonPnsController;
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
    Route::view('/pegawai','pegawais');
    Route::get('/export-pegawai', [PegawaiController::class, 'export'])->name('export-pegawai');
    Route::view('/skcpns','sk-cpnss');
    Route::get('/export-skcpns', [SkCpnsController::class, 'export'])->name('export-skcpns');
    Route::view('/sknonpns','sk-non-pnss');
    Route::get('/export-sknonpns', [SkNonPnsController::class, 'export'])->name('export-sknonpns');
    Route::view('/skpns','sk-pnss');
    Route::get('/export-skpns', [SkPnsController::class, 'export'])->name('export-skpns');
    Route::view('/skkgb','sk-kgbs');
    Route::get('/export-skkgb', [SkKgbController::class, 'export'])->name('export-skkgb');

    Route::get('posts', [PostController::class, 'index'])->name('posts');
    Route::post('posts', [PostController::class, 'store']);
    Route::get('posts/{slug}', [PostController::class, 'show']);
    Route::get('post', [PostController::class, 'create'])->name('post.create');
    Route::get('post-edit', [PostController::class, 'edit'])->name('post.edit');
    Route::delete('posts', [PostController::class, 'destroy'])->name('post.destroy');
    
    
});

Route::get('/', [LandingController::class, 'index']);
