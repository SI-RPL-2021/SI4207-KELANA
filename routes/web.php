<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
use App\Http\Controllers\MerchantController;
=======
use App\Http\Controllers\DetailuserController;
use App\Http\Controllers\StoryController;
>>>>>>> d3697d3d5789befe9ab76c039675bba6026f1e7b

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
Route::resource('merchant', MerchantController::class);
