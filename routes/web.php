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
Route::view('/compose', 'compose')->middleware('requireAuth');
Route::view('/blogs', 'blogs')->middleware('requireAuth');
Route::view('/myblogs', 'myblogs')->middleware('requireAuth');
Route::view('/login', 'login')->middleware('alreadyLoggedIn');
Route::view("/signup", "register")->middleware('alreadyLoggedIn');
Route::view('/noaccess','noaccess');
Route::post("/compose", [BlogsController::class, 'createBlog']);
Route::get('/blogs', [BlogsController::class, 'getBlogs'])->middleware('requireAuth');
Route::get('/myblogs',[BlogsController::class,'getMyBlogs'])->middleware('requireAuth');
Route::get("/delete/{id}", [BlogsController::class, 'deleteBlog']);
Route::post('/signup', [UserController::class, 'createUser']);
Route::post('/login',[UserController::class,'loginUser']);

