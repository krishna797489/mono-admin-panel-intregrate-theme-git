<?php

use App\Http\Controllers\Admin\dashboardController;
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

Route::get('admin/dashboard',[dashboardController::class,'dashboard'])->name('admin.dashboard');//getting start
Route::get('admin/sign-in',[dashboardController::class,'sign_in'])->name('sign_in');//sign in
Route::get('admin/sign-up',[dashboardController::class,'sign_up'])->name('sign_up');//sign up
Route::get('admin/reset-password',[dashboardController::class,'reset_password'])->name('reset_password');//reset password
Route::get('admin/chat',[dashboardController::class,'chat'])->name('chat');//chat
Route::get('admin/index',[dashboardController::class,'index'])->name('index');//index page
