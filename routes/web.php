<?php

namespace App\Http\Middleware;

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

Route::get('/', function () {
    return view("home");
});
Route::get('/logout', function () {
    if (session()->has('loginId')) {
        session()->pull('loginId', null);
    }
    return redirect("/login");
});
Route::view('/compose', 'compose');
Route::view('/blogs', 'blogs');
Route::view('/myblogs', 'myblogs');
Route::view('/login', 'login');
Route::view("/signup", "register");
Route::post("/compose", [BlogsController::class, 'createBlog']);
Route::get('/blogs', [BlogsController::class, 'getBlogs']);
Route::get('/myblogs',[BlogsController::class,'getMyBlogs']);
Route::get("/delete/{id}", [BlogsController::class, 'deleteBlog']);
Route::post('/signup', [UserController::class, 'createUser']);
Route::post('/login',[UserController::class,'loginUser']);
