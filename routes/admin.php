<?php
use App\Http\Controllers\Admin\AdminDashBoardController;
use App\Http\Controllers\Admin\ProfileController;

use Illuminate\Support\Facades\Route;
Route::group(['prefix' =>'admin','as'=>'admin.'], function()
{
    Route::get('dashboard',[AdminDashBoardController::class,'index'])->name('dashboard');

    Route::get('profile',[ProfileController::class,'index'])->name('profile');
    
});

