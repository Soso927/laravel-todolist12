<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', TaskController::class);

Route::get('/', function () {
    return view('welcome');
})->name('accueil');

Route::get('/destinations', function () {
    return view('destinations');
})->name('destinations');

Route::get('/equipage', function () {
    return view('equipage');
})->name('equipage');

Route::get('/technologies', function () {
    return view('technologies');
})->name('technologies');