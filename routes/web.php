<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', [PostController::class, 'task']);
Route::get('/city/location', [PostController::class, 'city']);
Route::get('/user/admin', [PostController::class, 'admin']);
Route::get('/user/all', [PostController::class, 'all']);
Route::get('/user/{name}', [PostController::class, 'show']);

