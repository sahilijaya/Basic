<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\PesertaController;

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

// Route::get('/', function () {
//      return view('welcome');
// });

// Front Route
Route::get('/', [FrontController::class, 'index'])->name('pages.home');

// Peserta Route
Route::post('/peserta/store', [PesertaController::class, 'store'])->name('peserta.store');

// Back Route (Grouping)
Route::prefix('admin')->controller(BackController::class)->group(function(){
    Route::get('/dashboard', 'index')->name('pages.back.dashboard');
    
});

// Peserta Route Back
Route::controller(PesertaController::class)->group(function(){
    Route::get('/edit/{id}', 'edit')->name('peserta.edit');
    Route::put('/update/{id}', 'update')->name('peserta.update');
    
});
