<?php

use App\Http\Controllers\BlogsController;
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
Route::view('compose','/compose');
Route::view('blogs','/blogs');
Route::view('myblog','/myblog');

Route::post("posts",[BlogsController::class,'saveBlog']);
Route::get('/posts',[BlogsController::class,'retrieveBlogs']);







