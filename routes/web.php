<?php

use App\Http\Controllers\postControll;
use App\Http\Controllers\DataController;
use App\Models\Jurusan;
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

Route::get('/', [postControll::class, 'dashboard']);
Route::get('/dashboard', [postControll::class, 'dashboard']);

Route::get('/dataMahasiswa', [postControll::class, 'dataMahasiswa']);
Route::get('/jurusan', [postControll::class, 'jurusan']);
Route::get('/jurusan/{jurusans:nama}', [postControll::class, 'dataPadajurusan']);

Route::get('/karya', [postControll::class, 'daftarKarya']);
