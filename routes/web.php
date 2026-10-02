<?php

use App\Http\Controllers\AdminController;
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

Route::get('/admin-login',[AdminController::class,'admin_login_view']);
Route::post('/adminloginaction',[AdminController::class,'adminlogin_submit']);
Route::get('/admin-register',[AdminController::class,'admin_register_view']);
Route::post('/adminregisteraction',[AdminController::class,'adminregisteraction_submit']);
Route::get('/admindashboard',[AdminController::class,'admindashboard_view']);
Route::get('/clinic',[AdminController::class,'clinic_view']);
Route::get('/addclinic',[AdminController::class,'addclinic_view']);