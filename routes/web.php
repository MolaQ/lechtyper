<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;


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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/twitter', [TwitterController::class, 'connect_twitter'])->name('twitter');
Route::get('/twitter/callback', [TwitterController::class, 'twitter_callback'])->name('twitter.callback');

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');


