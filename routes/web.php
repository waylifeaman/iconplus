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
Route::get('/service', [postControll::class, 'service']);
Route::get('/hargapaket', [postControll::class, 'hargapaket']);
Route::get('/petawilayah', [postControll::class, 'petawilayah']);
