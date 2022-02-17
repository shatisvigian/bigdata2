<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home2', [App\Http\Controllers\Controller::class, 'display'])->middleware('auth');

Auth::routes();

Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'display'])->name('home');
Route::get('/form', [App\Http\Controllers\Controller::class, 'index'])->name('home');
Route::post('/formpengguna', [App\Http\Controllers\Controller::class, 'formpengguna']);


