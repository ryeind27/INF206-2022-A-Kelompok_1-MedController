<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\AppController;

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


Route::get('/',[RegController::class,'index']);

Route::post('/Login',[RegController::class,'login']);

Route::get('/forgotpass',[RegController::class,'forgetpass']);

Route::get('/SignUp',[RegController::class,'daftar']);

Route::post('/SignUp',[RegController::class,'store']);


Route::get('/Home', [Appcontroller::class,'index']);
