<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

// Route::get('/', function () {
//     return view('mahasiswa_index');
// });

// Route::get('/', [MahasiswaController::class, 'index']);
// Route::get('/add', [MahasiswaController::class, 'create']);
// Route::post('/store', [MahasiswaController::class, 'store']);
// Route::get('/update', [MahasiswaController::class, 'update']);
// Route::get('/edit/{id}', [MahasiswaController::class, 'edit']);
// Route::get('/delete/{id}', [MahasiswaController::class, 'destroy']);

Route::resource('mahasiswa', MahasiswaController::class);
