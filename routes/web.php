<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FirstTimerController;
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

// Route::get('/first-timer', function () {
//     return view('admin.first-timer');
// })->name('add-first-timer');

// Route::get('/first-timer-list', function () {
//     return view('admin.ftm-list');
// })->name('first-timer');

// Route::get('/profile', function () {
//     return view('admin.profile');
// })->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::post('/update-profile', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('update-profile');



Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {  
 
    Route::prefix('first-timer')->controller(FirstTimerController::class)->group(function () {
        Route::get('/', "index")->name("add-first-timer");
        Route::post('/save', "store")->name("save-first-timer");

        Route::get('/list', "show")->name("first-timer");
    });

    // Route::prefix('kitchen-transactions')->controller(KitchenTransactionController::class)->group(function () {
    //     Route::get('/', "index")->name("order.index");
    // });
});