<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use Illuminate\Routing\RouteGroup;

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


Route::get('/', [ViewController::class, 'ViewHome'])->name('home')->middleware('user');
Route::get('/plantas', [ViewController::class, 'ViewPlantas'])->name('plantas')->middleware('user');
Route::get('/pronosticos', [ViewController::class, 'ViewPronostico'])->name('pronosticos')->middleware('user');
Route::get('/sensores', [ViewController::class, 'ViewSensores'])->name('sensores')->middleware('user');
Route::get('/logout', [ViewController::class, 'Logout'])->name('logout')->middleware('user');
Route::get('/login', [ViewController::class, 'ViewLogin'])->name('login');
Route::post('/ini-sesion', [UserController::class, 'login'])->name('ini-sesion');
