<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;

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
    return view('navbar');
});

    Route::get('/',[RegController::class,'masuk']);


   Route::get('/signUp',[RegController::class,'daftar']);

   Route::get('/forgotpass',[RegController::class,'forgetpass']);

   Route::get('/SignUp',[RegController::class,'daftar']);

   Route::get('navbar',[RegController::class,'navbar']);

   Route::get('/profile',[RegController::class,'profile']);

   Route::get('/login',[RegController::class,'index']);

   Route::get('/jadwal',[RegController::class,'setJadwal']);

   Route::get('/chat',[RegController::class,'chat']);

   Route::get('/resep',[RegController::class,'resep']);
