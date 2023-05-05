<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\UserNoticeController;
use App\Http\Controllers\UserResultDisplay;
use App\Models\UserResult;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/brochure', function () {
    return view('brochure.brochure');
});

Route::get('/sky_location', function () {
    return view('location.create');
})->middleware('user');
Route::get('/home', [App\Http\Controllers\UserAppController::class, 'index'])->name('layouts.user_app')->middleware('user');
Route::get('user/notice',[UserNoticeController::class ,'index'])->name('usernotice.page')->middleware('user');
Route::get('user/result',[UserResultDisplay::class ,'index'])->name('userresult.page')->middleware('user');
Route::get('/gallery', function () {
    return view('gallery');
})->middleware('user');



Auth::routes();
Route::get('/admission/create',[App\Http\Controllers\AdmissionController::class, 'admission'])->name('admission.create')->middleware('user');


Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');

Route::group(['prefix' => 'admin'], function() {
	Route::group(['middleware' => 'admin.guest'], function(){
		
		Route::view('/login','admin.login')->name('admin.login');
		Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
	});
	
	Route::group(['middleware' => 'admin.auth'], function(){
		Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
	});


	
		
	



	Route::get('/admission/display',[App\Http\Controllers\UserAdmissionDisplay::class , 'DisplayAdmission']);
    Route::get('/users/index',[App\Http\Controllers\Admin\UserController::class , 'index']);
    // Route::get('/brochure',[App\Http\Controllers\BrochureController::class , 'brochure']);
});




Route::POST('/admission/create',[AdmissionController::class,'store'])->middleware('user');
Route::resource('notice',NoticeController::class)->middleware('admin.auth');
Route::resource('result',ResultController::class)->middleware('admin.auth');