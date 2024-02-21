<?php
use App\Http\Controllers\Admin\AdminDashBoardController;
use App\Http\Controllers\Admin\ProfileController;

use Illuminate\Support\Facades\Route;
Route::group(['prefix' =>'admin','as'=>'admin.'], function()
{
    Route::get('dashboard',[AdminDashBoardController::class,'index'])->name('dashboard');
/** Profile routes */ 
    Route::get('profile',[ProfileController::class,'index'])->name('profile');
    Route::put('profile',[ProfileController::class,'updateProfile'])->name('profile.update');

    Route::put('profile/password',[ProfileController::class,'updatePassword'])->name('profile.password.update');
    
});


