<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
//default//
Route::get('/', function () {
    return view('welcome');
});

//Mainpage//
Route::get('/index',[HomeController::class,'index'] );
//ViewPage//
Route::get('/display',[HomeController::class,'display']);
Route::post('/display',[HomeController::class,'submit'] );


