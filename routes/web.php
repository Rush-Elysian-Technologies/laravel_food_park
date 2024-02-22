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


Route::get('admin/login',[AdminAuthController::class,'index'])->name('admin.login');



Route::get('/',[FrontendController::class,'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::put('profile',[ProfileController::class,'updateProfile'])->name('profile.update');
});



require __DIR__.'/auth.php';


Route::get('admin/dashboard',[AdminDashBoardController::class,'index'])->middleware('auth','role:admin')->name('admin.dashboard');