<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/explore', [App\Http\Controllers\HomeController::class, 'explore'])->name(''); //route ke index explore
Route::get('/explore/tempatwisata', [App\Http\Controllers\HomeController::class, 'tempatwisata'])->name(''); //route ke tempat wisata
Route::get('/story', [App\Http\Controllers\StoryController::class, 'index'])->name(''); //route ke index story

