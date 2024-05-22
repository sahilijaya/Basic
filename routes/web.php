<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\BackController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [FrontController::class, 'index'])->name('page.home');
Route::post('/store', [PesertaController::class, 'store'])->name('peserta.store');

Route::prefix('admin')->controller(BackController::class)->group(function(){
    Route::get('/dashboard', 'index')->name('admin.dashboard');

    Route::controller(PesertaController::class)->group(function(){
        Route::get('/peserta/edit/{id}', 'edit')->name('admin.peserta.edit');
        Route::put('/peserta/update/{id}', 'update')->name('admin.peserta.update');
        Route::get('/peserta/destroy/{id}', 'destroy')->name('admin.peserta.destroy');
    });
});

require __DIR__.'/auth.php';
