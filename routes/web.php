<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DetailuserController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\ExploreController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('user');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'handleAdmin'])->name('admin.route')->middleware('admin');

Route::resource('detailuser', DetailuserController::class);
Route::resource('story', StoryController::class);

Route::resource('explore', ExploreController::class);