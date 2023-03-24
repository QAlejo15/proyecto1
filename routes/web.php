<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SecueurlController;
use App\Http\Controllers\LogoutController;
use App\Models\User;

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
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layoutprincipal');
});

Route::get('/sesion',[SesionController::class,'index'])->name('sesion');
Route::post('/sesion',[SesionController::class,'store'])->name('sesion');
Route::get('/registro',[RegistroController::class,'index'])->name('registro');
Route::post('/registro',[RegistroController::class,"store"])->name('registro');
Route::get('/{user:username}',[SecueurlController::class,'index'])->name('dash');
Route::post('/logout',[LogoutController::class,"store"])->name('logout');




