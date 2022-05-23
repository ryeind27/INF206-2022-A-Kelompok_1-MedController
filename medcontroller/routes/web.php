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
    Route::get('/',[RegController::class,'Masuk']);

    Route::get('/signUp',[RegController::class,'daftar']);

    Route::post('/Login',[RegController::class,'login']);

    Route::get('/forgotpass',[RegController::class,'forgetpass']);

    Route::get('/SignUp',[RegController::class,'daftar']);

    Route::get('/home',[RegController::class,'home']);

    Route::get('/profile',[RegController::class,'profile']);

    Route::get('/login',[RegController::class,'index']);

    Route::get('/jadwal',[RegController::class,'setJadwal']);

    Route::get('/chat',[RegController::class,'chat']);

    Route::get('/resep',[RegController::class,'resep']);


   Route::post('/SignUp',[RegController::class,'store']);

   Route::get('/resepDokter',[RegController::class,'resep']);

   Route::get('/SignUp',[RegController::class,'daftar']);

   Route::post('/SignUp',[RegController::class,'store']);


