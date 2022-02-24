<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){

    Auth::routes();
});

Route::view('/onama', 'onama');
Route::view('/info', 'info');
//Route::view('/searchcar', 'searchcar');
Route::get('/searchPart',[SearchController::class,'searchPart'])->name('searchPart');
Route::get('/searchcar',[SearchController::class,'searchcar'])->name('searchcar');

Route::get('shops',[ShopController::class,'index']);
Route::post('prijavi',[ShopController::class,'prijavi'])->name('prijavi');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'superadmin' , 'middleware'=>['isSuperAdmin','auth','PreventBackHistory']], function(){

    Route::get('dashboard',[SuperAdminController::class,'index'])->name('superadmin.dashboard');
    Route::get('/delete/{id}',[SuperAdminController::class,'delete']);
    Route::get('/addAdmin/{id}',[SuperAdminController::class,'addAdmin']);
    Route::get('/deleteAdmin/{id}',[SuperAdminController::class,'deleteAdmin']);
});

Route::group(['prefix'=>'admin' , 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){

    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/delete/{id}',[AdminController::class,'delete']);
    Route::get('/deleteCar/{id}',[AdminController::class,'deleteCar']);
    Route::get('/deletePart/{id}',[AdminController::class,'deletePart']);
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');

});

Route::group(['prefix'=>'user' , 'middleware'=>['isUser','auth','PreventBackHistory']], function(){

    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('/delete/{id}',[UserController::class,'delete']);
    Route::get('/deletePart/{id}',[UserController::class,'deletePart']);
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');
    Route::post('add',[UserController::class,'add'])->name('add');
   // Route::get('addPart',[UserController::class,'addPart'])->name('addPart');
    Route::get('returnData',[UserController::class,'returnData'])->name('returnData');

});
