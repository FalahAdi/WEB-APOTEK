<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PembelianController;
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

Route::get('/index', function () {
    return view('index');
});

//route pembelian
route::get('/CatatPembelian', [IndexController::class, 'CatatPembelian']);
route::get('/ListPembelian', [IndexController::class, 'ListPembelian']);
route::get('/ListObat', [IndexController::class, 'ListObat']);
route::get('/CatatObat', [IndexController::class, 'CatatObat']);

//route obat
route::post('/tambahObat', [ObatController::class, 'tambah']);
route::get('/editObat/{id}', [ObatController::class, 'edit']);
route::post('/editAction/{id}', [ObatController::class, 'editAction']);
route::get('/deleteAction/{id}', [ObatController::class, 'deleteAction']);

//route pembelian
route::post('/tambahPembelian', [PembelianController::class, 'tambahPembelian']);
route::get('/editPembelian/{id}', [PembelianController::class, 'editPembelian']);
route::post('/editActionPembelian/{id}', [PembelianController::class, 'editActionPembelian']);
route::get('/deletePembelian/{id}', [PembelianController::class, 'deletePembelian']);



