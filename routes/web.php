<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaloController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LoginController;
use App\Models\Pelanggan;
use App\Models\Pembelian;

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

// Route::get('/helo', function(){
//     return view('halo');
// });

// Route::get('/halo', function(){
//     return view('halo2');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware('role:KASIR')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/profil/', function(){
        return view('profil');
    })->name('profil');

    Route::get('/pelanggan', function(){
        return view('pelanggan', ['pelanggan'=>Pelanggan::with(['pembelian'])->get(), 'pembelian'=>Pembelian::with(['pelanggan'])->get()]);
    })->name('pelanggan');

    Route::get('/pelanggan/create',
        [PelangganController::class, 'create']
    )->name('pelanggan.create');
});

Route::get('/halo/index/{param1}/{param2?}', 
    [HaloController::class, 'index']);

    Route::post('/halo/index/', 
    [HaloController::class, 'index']);

Route::get('/pelanggan', function(){
    return view('pelanggan', ['pelanggan'=>Pelanggan::with(['pembelian'])->get(), 'pembelian'=>Pembelian::with(['pelanggan'])->get()]);
})->name('pelanggan');

Route::get('/pelanggan/create',
    [PelangganController::class, 'create']
)->name('pelanggan.create');

Route::post('/halo/index/', 
[HaloController::class, 'index']);

Route::post('/pelanggan/insert',
    [PelangganController::class, 'insert']
)->name('pelanggan.insert');

Route::get('/pelanggan/edit/{id}',
    [PelangganController::class, 'edit']
)->name('pelanggan.edit');

Route::put('/pelanggan/update/{id}',
    [PelangganController::class, 'update']
)->name('pelanggan.update');

Route::delete('/pelanggan/delete/{id}',
    [PelangganController::class, 'delete']
)->name('pelanggan.delete');

Route::get('request/to/api', [PelangganController::class, 'request_to_api']);