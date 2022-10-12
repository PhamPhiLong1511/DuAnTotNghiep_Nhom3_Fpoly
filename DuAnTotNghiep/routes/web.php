<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Login\LoginController;

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
/**
 *Trans:Home
 * */
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');

