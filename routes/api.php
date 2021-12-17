<?php

use App\Http\Controllers\Api\FileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('upload',[FileController::class,'postUploadFile']);
Route::get('get',[FileController::class,'getUploadFiles']);
Route::get('get/{id}',[FileController::class,'getByIdUploadFiles']);
