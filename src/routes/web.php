<?php

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

Route::get('/', function () {
    return view('main');
});

Route::get('/timer', \App\Http\Livewire\Timer::class)->name('timer');
Route::get('/setting', \App\Http\Livewire\Setting::class)->name('setting');
Route::get('/profile', \App\Http\Livewire\Profile::class)->name('profile');
Route::get('/projects', \App\Http\Livewire\Projects::class)->name('projects');
Route::get('/projects/new', \App\Http\Livewire\NewProject::class)->name('new-project');

