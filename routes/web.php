<?php

use App\Http\Controllers\Admin\AdminDashBoardController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\ProfileController ;

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

//
Route::group(['middleware' =>'guest'], function()
{
    Route::get('admin/login',[AdminAuthController::class,'index'])->name('admin.login');
    Route::get('admin/forget-password',[AdminAuthController::class,'forgetPassword'])->name('admin.forget-password');
    Route::get('admin/dashboard',[AdminDashBoardController::class,'index'])->middleware('auth','role:admin')->name('admin.dashboard');
});





Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::put('profile',[ProfileController::class,'updateProfile'])->name('profile.update');
    Route::put('profile/password',[ProfileController::class,'updatePassword'])->name('profile.password.update');
    Route::put('profile/avatar',[ProfileController::class,'updateAvatar'])->name('profile.avatar.update');
});


Route::get('/',[FrontendController::class,'index'])->name('home');

require __DIR__.'/auth.php';


