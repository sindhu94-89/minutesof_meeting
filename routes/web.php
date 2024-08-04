<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MOMController;
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
Route::get('/',[AuthController::class,'home']);

Route::prefix('register')->group(function(){
    Route::get('/', [AuthController::class,'user_register']);
    Route::post('/createUser',[AuthController::class,'createUser']);
    Route::get('/login',[AuthController::class,'login']);
    Route::post('/loginPost',[AuthController::class,'authenticateUser']);
});
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/home',function(){
    //dd(Auth::User());
    echo 'Welcome '.Auth::user()->name;
});
Route::prefix('mom')->group(function(){
    Route::get('/dashboard',[MOMController::class,'dashboard']);
    Route::get('/createMom',[MOMController::class,'createMom']);
    Route::post('/createMomPost',[MOMController::class,'createMomPost']);
    Route::get('/editMOM/{id}',[MOMController::class,'editMOM']);
    Route::post('/updateMOM', [MOMController::class,'updateMOM']);
    Route::get('/deleteMOM/{id}',[MOMController::class,'deleteMOM']);
});


