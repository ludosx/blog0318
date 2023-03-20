<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterCreate;
use App\Http\Controllers\RegisterStore;
use App\Http\Controllers\SessionCreate;
use App\Http\Controllers\SessionStore;
use App\Http\Controllers\SessionDestroy;
use App\Http\Controllers\PostCreate;
use App\Http\Controllers\PostStore;
use App\Http\Controllers\AnswerCreate;
use App\Http\Controllers\AnswerStore;


Route::get('/', HomeController::class)
    ->name('home');
Route::get('/register', RegisterCreate::class)
    ->name('register.create');
Route::post('/register', RegisterStore::class)
    ->name('register.store');
Route::get('/login', SessionCreate::class)
    ->name('login');
Route::post('/login', SessionStore::class)
    ->name('session.store');
Route::get('/logout', SessionDestroy::class)
    ->name('session.destroy');
Route::get('/post', PostCreate::class)
    ->middleware('auth')
    ->name('post.create');
Route::post('/post', PostStore::class)
    ->name('post.store');
Route::post('/answer', AnswerCreate::class)
    ->name('answer.create');
Route::post('/answer.store', AnswerStore::class)
    ->name('answer.store');

