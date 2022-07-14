<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

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

Route::get('/', [ViewController::class, 'ViewHome'])->name('home');
Route::get('/plantas', [ViewController::class, 'ViewPlantas'])->name('plantas');
Route::get('/pronosticos', [ViewController::class, 'ViewPronostico'])->name('pronosticos');
Route::get('/sensores', [ViewController::class, 'ViewSensores'])->name('sensores');