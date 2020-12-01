<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/'                      ,[ContactController::class,'get']);
Route::get('/show/contact/{id}'     ,[ContactController::class,'show']);
Route::post('/store/contact'        ,[ContactController::class,'store']);
Route::put('/update/contact/{id}'   ,[ContactController::class,'update']);
Route::delete('/delete/contact/{id}',[ContactController::class,'get']);