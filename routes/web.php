<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userInformation;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test',[UserInformation::class, 'index']);
Route::post('/index',[UserInformation::class, 'store']);
Route::get('/forms',[UserInformation::class, 'forms']);
Route::get('/createProject',[UserInformation::class, 'createProject']);


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
