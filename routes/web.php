<?php

use App\Http\Controllers\TwitterController;

use App\Livewire\Admin\Users\ListUsers;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Events\ListEvents;
use App\Livewire\FAQ;
use App\Livewire\HomePage;
use App\Livewire\Statistic;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', HomePage::class)->name('home');
Route::get('/faq', FAQ::class)->name('faq');
Route::get('/stats', Statistic::class)->name('stats');
// Route::get('/twitter', [MyTwitterConnect::class, 'connectTwitter'])->name('twitter');
// Route::get('/twitter/callback', [MyTwitterConnect::class, 'twitterCallback'])->name('twitter.callback');
// Route::get('/twitter/logout', [MyTwitterConnect::class, 'logout'])->name('twitter.logout');

//CONTROLLER LARAVEL
Route::get('/twitter', [TwitterController::class, 'connect_twitter'])->name('twitter');
Route::get('/twitter/callback', [TwitterController::class, 'twitter_callback'])->name('twitter.callback');
Route::get('/twitter/logout', [TwitterController::class, 'logout'])->name('twitter.logout');


Route::middleware('can:admin-access')->group(function () {
    Route::get('/admin', Dashboard::class)->name('admin.dashboard');
    Route::get('/admin/users', ListUsers::class)->name('admin.users');
    Route::get('/admin/events', ListEvents::class)->name('admin.events');
    // Route::get('/admin/footballers', ListFootballers::class)->name('admin.footballers');
    // Route::get('/admin/seasons', ListSeasons::class)->name('admin.seasons');
    // Route::get('/admin/members', SeasonLeaguesMembers::class)->name('admin.members');
    // Route::get('/admin/betevents', EventsList::class)->name('admin.betevents');
});


