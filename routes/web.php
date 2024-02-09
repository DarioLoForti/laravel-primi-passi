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
    $students = [
        "Ferdinando Bagnale", "Sebastian Buftea", "Christian d'Assenza", "Daniel Di Giacomo", "Igor Gaidolfi", "Nicolò Manunta", "Antonio Stasullo", "Nicolò Balbo", "Nicolò Camassa", "Giovanni D'Ubaldo", "Aiman Fadil", "Alessandro Greco", "Melissa Musumeci", "Pietro Straneo", "Giuseppe Belforte", "Fabio Casoria", "Tomas Darienko", "Luca Formica", "Nazariy Hereha", "Fabio Muzzu", "Alessandro Tardio", "Marco Benfante", "Asaf Castigliano", "Guido Roland Daversa Schiavoni", "Nicholas Fratus", "Dario Lo Forti", "Alex Rummolo", "Pietro Tomasello", "Edoardo Bergamo", "Giuseppe de Simone", "Alberto Mandirola", "Emanuele Scarpantoni", "Dorin Vieru",
    ];
    return view('students', compact('students'));
})->name('students');

Route::get('/teachers', function () {
    $teachers = "Fabrizio Mastrobattista";
    return view('teachers', compact('teachers'));
})->name('teachers');

Route::get('/tutor', function () {
    return view('tutor');
})->name('tutor');
