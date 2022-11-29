<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/tasks/{id}',   \App\Http\Livewire\Tasks::class)->name('tasks');
Route::get('/timer',        \App\Http\Livewire\Timer::class)->name('timer');
Route::get('/setting',      \App\Http\Livewire\Setting::class)->name('setting');
Route::get('/profile',      \App\Http\Livewire\Profile::class)->name('profile');
Route::get('/projects',     \App\Http\Livewire\Projects::class)->name('projects');
Route::get('/projects/new', \App\Http\Livewire\NewProject::class)->name('new-project');

