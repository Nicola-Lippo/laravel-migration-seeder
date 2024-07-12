<?php

use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\TrainsController;
use Illuminate\Support\Facades\Route;

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

//homepage
Route::get('/', [PageController::class, 'index'])->name('home');
//trains
Route::get('/trains', [TrainsController::class, 'index'])->name('trains');
