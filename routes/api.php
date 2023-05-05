<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\Api\ResultController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\NoticeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('admission', [AdmissionController::class,'show']);

Route::post('admission/create',[AdmissionController::class, 'store']);

Route::post('login',[UserController::class,'loginUser']);


Route::group(['middleware' => 'auth:sanctum'],function(){
    Route::get('user',[UserController::class,'userDetails']);
    Route::get('logout',[UserController::class,'logout']);
});
Route::apiResource("notice",NoticeController::class);
Route::apiResource("result",ResultController::class);