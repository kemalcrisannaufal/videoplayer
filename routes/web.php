<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

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

Route::get('/', [VideoController::class, 'index']);
Route::get('/addVideo', [VideoController::class, 'create']);
Route::post('/video', [VideoController::class, 'store']);
Route::get('/video/{id}', [VideoController::class, 'show']);
Route::delete('/video-delete/{id}', [VideoController::class, 'destroy']);
Route::get('/video-edit/{id}', [VideoController::class, 'edit']);
Route::put('/video/{id}', [VideoController::class, 'update']);
Route::get('/videos', [VideoController::class, 'showVideos']);

