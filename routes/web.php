<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\PageController;
use App\Http\Livewire\Admin\Footballers\ListFootballers;
use App\Http\Livewire\Admin\Users\ListUsers;
use App\Http\Livewire\Admin\Seasons\ListSeasons;
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
Route::get('/twitter/logout', [TwitterController::class, 'logout'])->name('twitter.logout');

Route::get('/admin/dashboard', DashboardController::class)->name('admin.dashboard');
Route::get('/admin/users', ListUsers::class)->name('admin.users');
Route::get('/admin/footballers', ListFootballers::class)->name('admin.footballers');
Route::get('/admin/seasons', ListSeasons::class)->name('admin.seasons');
