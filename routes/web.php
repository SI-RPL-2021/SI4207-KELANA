<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DetailuserController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ParkController;
use App\Http\Controllers\FoodController;



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
//landing
Route::get('/', function () {
    return view('welcome');
});
//landing

//auth
Auth::routes();
Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('user');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'handleAdmin'])->name('admin.route')->middleware('admin');
//auth

Route::resource('detailuser', DetailuserController::class);
Route::resource('story', StoryController::class);


Route::resource('explore', ExploreController::class); 
Route::resource('park', ParkController::class); 
Route::resource('hotel', HotelController::class); 
Route::resource('food', FoodController::class); 
 

Route::resource('merchant', MerchantController::class);
