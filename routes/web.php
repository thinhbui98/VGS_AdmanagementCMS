<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admanagement\AdHomeController;
use App\Http\Controllers\Admanagement\AdLogoController;
use App\Http\Controllers\Admanagement\AdNewsController;
use App\Http\Controllers\Admanagement\AdScorecardController;

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

Route::match(['get', 'post'], 'login', [AuthController::class, 'login']);

Route::get('logout', [AuthController::class, 'logout']);

Route::group(['prefix' => 'cms','middleware' => 'auth'], function () {
    Route::any('/', function () {
        return redirect('cms/user');
    });

    Route::resource('user', UserController::class);

    Route::get('user/delete/{user}', [UserController::class, 'delete']);

    Route::resource('adhome', AdHomeController::class);

    Route::resource('adlogo', AdLogoController::class);

    Route::resource('adnews', AdNewsController::class);

    Route::resource('adscorecard', AdScorecardController::class);

});