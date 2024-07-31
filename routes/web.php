<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
Route::get('/dashboard',[AuthController::class,'dashboard']);
