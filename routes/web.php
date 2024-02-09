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
    $welcome = 'Hello World';
    return view('homepage', compact('welcome'));
})->name('homepage');

Route::get('/students', function () {
    return view('students');
})->name('students');

Route::get('/teachers', function () {
    return view('teachers');
})->name('teachers');

Route::get('/tutor', function () {
    return view('tutor');
})->name('tutor');
