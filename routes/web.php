<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\TourGuideController;

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

Route::get("/story",[StoryController::class, 'index'])->name("story");
Route::get("/story/view/{storyId}",[StoryController::class,'viewStory'])->name("viewStory");
Route::get("/story/create",[StoryController::class, 'createStoryPage'])->name("create_story")->middleware("auth");
Route::post("/story/create/process",[StoryController::class, 'createStory'])->name("create_story_process")->middleware("auth");
