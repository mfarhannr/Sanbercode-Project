<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Castcontroller;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [HomeController::class, 'register']);
Route::post('/kirim', [HomeController::class, 'kirim']);

Route::get('/table', function () {
    return view('halaman.table');
});
Route::get('/data-table', function(){
    return view('halaman.data-table');
});

Route::get('/cast/create', [CastController::class, 'create']);
Route::get('')
