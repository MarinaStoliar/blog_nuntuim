<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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


Route::get('/', [BlogController::class, 'index']);





//Route::get('/', function () {
//    return view('pages.index');
//});

//Route::get('/header', [BlogController::class, 'creating']);
//
//
//Auth::routes();
//
//Route::get('/', [HomeController::class, 'welcome'])->name('home');
//
//
Route::get('/', [BlogController::class, 'index']);
//Route::get('/category/{slug}', [BlogController::class, 'getPostsByCategory'])->name('getPostsByCategory');
//Route::get('/category/{slug_category}/{slug_post}', [BlogController::class, 'getPost'])->name('getPost');







