<?php
use App\Http\Controllers\Admin\AdminDashBoardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\WhyChooseUsController;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' =>'admin','as'=>'admin.'], function()
{
    Route::get('dashboard',[AdminDashBoardController::class,'index'])->name('dashboard');
/** Profile routes */ 
    Route::get('profile',[ProfileController::class,'index'])->name('profile');
    Route::put('profile',[ProfileController::class,'updateProfile'])->name('profile.update');

    Route::put('profile/password',[ProfileController::class,'updatePassword'])->name('profile.password.update');
    
    /* slider Routes*/
    Route::resource('slider', SliderController::class);
    
    /* Why Routes*/
    Route::resource('why-choose-us', WhyChooseUsController::class);
});


