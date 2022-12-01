<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/process', 'process');
    Route::get('logout', 'logout');
});
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['loginw:1']], function () {
        Route::resource('en-page', PanelController::class);
    });
    Route::group(['middleware' => ['loginw:2']], function () {
        Route::resource('admin-page', DashboardController::class);
    });
    Route::group(['middleware' => ['loginw:3']], function () {
        Route::resource('support-page', DashboardController::class);
    });
    Route::group(['middleware' => ['loginw:4']], function () {
        Route::resource('user-page', HomeController::class);
    });
});