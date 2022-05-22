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
Route::get('/', function () {
   return view('profile');
});
   // Route::get('/',[RegController::class,'Masuk']);
   
   Route::get('/signUp',[RegController::class,'daftar']);

<<<<<<< HEAD
   Route::post('/Login',[RegController::class,'login']);
=======
Route::get('/',[RegController::class,'Masuk']);
>>>>>>> TM-Roy-Adrian_2008107010069

   Route::get('/forgotpass',[RegController::class,'forgetpass']);

<<<<<<< HEAD
   Route::get('/SignUp',[RegController::class,'daftar']);

   Route::get('/home',[RegController::class,'home']);
=======
Route::get('/SignUp',[RegController::class,'daftar']);
>>>>>>> TM-Roy-Adrian_2008107010069

   Route::get('/profile',[RegController::class,'profile']);

   Route::get('/login',[RegController::class,'index']);

   Route::get('/jadwal',[RegController::class,'setJadwal']);

   Route::get('/chat',[RegController::class,'chat']);

   Route::get('/resep',[RegController::class,'resep']);

   Route::get('/SignUp',[RegController::class,'daftar']);

   Route::post('/SignUp',[RegController::class,'store']);


   // Route::get('/Home', [Appcontroller::class,'index']);

