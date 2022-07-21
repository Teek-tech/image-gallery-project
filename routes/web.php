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

Route::get('/first-timer', function () {
    return view('admin.first-timer');
})->name('add-first-timer');

Route::get('/first-timer-list', function () {
    return view('admin.ftm-list');
})->name('first-timer');

Route::get('/profile', function () {
    return view('admin.profile');
})->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');