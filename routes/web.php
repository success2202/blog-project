<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'homepage']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/post_page', [AdminController::class, 'post_page']);

Route::get('/home',[HomeController::class, 'index'])->middleware('auth')->name('home');
Route::post('/add_post',[AdminController::class, 'add_post']);

Route::get('/show_post',[AdminController::class, 'show_post']);
Route::get('/delete_post/{id}',[AdminController::class, 'delete_post']);
