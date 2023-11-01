<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\challenge;
use App\Http\Controllers\latihanform;

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

Route::get('/', [challenge::class,'index']);

Route::get('/', [latihanform::class,'index']);
Route::post('/profile', [latihanform::class,'store']);