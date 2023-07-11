<?php

use App\Http\Controllers\BlogrController;
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

Route::get('/', [BlogrController::class, 'allbloge']);
Route::get('/bloge', [BlogrController::class, 'bloge']);
Route::post('/postbloge', [BlogrController::class, 'blogestore']);
Route::get('/comment', [BlogrController::class, 'comment']);
Route::post('/postcomment', [BlogrController::class, 'commentStore']);
