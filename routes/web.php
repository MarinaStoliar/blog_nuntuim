<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
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
Route::get('/forma', [ArticleController::class, 'blog']);

Route::post('/article', [ArticleController::class, 'store'])->name('article');

Route::get('/article/{id}', [BlogController::class, 'show'])->name('article.show');

Route::get('/home', [BlogController::class, 'home'])->name('home');
Route::get('/tags', [BlogController::class, 'tags'])->name('tags');
Route::get('/about', [BlogController::class, 'about'])->name('about');
