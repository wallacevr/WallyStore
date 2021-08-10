<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario as UserController;
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

Route::get('/', 'App\Http\Controllers\Usuario@cadastrar')->name('home');
Route::post('/salvar', 'App\Http\Controllers\Usuario@salvar')->name('salvar');
Route::get('/welcome', function () {
    return view('welcome');
});
Route::post('/Auth',[UserController::Class,'Auth'])->name('auth.user');