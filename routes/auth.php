<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;


/** user authentication */
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('authenticate',[AuthController::class,'authenticate'])->name('authenticate');
Route::post('logout',[AuthController::class,'logout'])->name('logout');


/** create new user */
Route::get('signup',[AuthController::class,'signup'])->name('signup');
Route::post('create-user',[AuthController::class,'createUser'])->name('create.user');


