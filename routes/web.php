<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\UserController;
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
Route::get('/',function(){
    return view("compose");
});
Route::view('blogs','/blogs');
Route::view('myblog','/myblog');
Route::view('login','/login');
Route::view("/signup","register");
Route::post("/",[BlogsController::class,'saveBlog']);
Route::get('/blogs',[BlogsController::class,'getBlogs']);
Route::post('/signup',[UserController::class,'userHandler']);






