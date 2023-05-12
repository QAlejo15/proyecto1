<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\SecueurlController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\imgController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserController;
use App\Models\Comentario;
use App\Models\Post;
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
Route::get('/feed',[UserController::class,'index'])->name('feed');
Route::get('/sesion',[SesionController::class,'index'])->name('sesion');
Route::post('/sesion',[SesionController::class,'store'])->name('sesion');
Route::get('/registro',[RegistroController::class,'index'])->name('registro');
Route::post('/registro',[RegistroController::class,"store"])->name('registro');
Route::get('/{user:username}',[SecueurlController::class,'index'])->name('dash');
Route::get('/posts/create',[SecueurlController::class,'create'])->name('publicaciones.create');
Route::post('/imgs',[imgController::class,"store"])->name('img.store');
Route::post('/posts',[SecueurlController::class, "store"])->name('publicaciones.store');
Route::get('/posts/{user:username}/{post}',[SecueurlController::class, "show"])->name('publicaciones.show');
Route::post('/comments', [ComentarioController::class, "store"])->name('comentarios.store');
//Route::get('/{username}',[SecueurlController::class,'perfil'])->name('perfil');
Route::delete('/comments/{id}', [ComentarioController::class, "destroy"])->name('comentarios.destroy');
Route::delete('/posts/{post}', [SecueurlController::class, "destroy"])->name('publicaciones.destroy');
Route::post('like',[LikeController::class,'store'])->name('like.store');

Route::post('/logout',[LogoutController::class,"store"])->name('logout');




