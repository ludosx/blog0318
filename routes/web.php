<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterCreate;
use App\Http\Controllers\RegisterStore;
use App\Http\Controllers\SessionCreate;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', RegisterCreate::class)
    ->name('register.create');
Route::post('/register', RegisterStore::class)
    ->name('register.store');
Route::get('/login', SessionCreate::class)
    ->name('session.create');

