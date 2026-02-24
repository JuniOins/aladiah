<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // page d'accueil
})->name('home');

Route::get('/menu', function () {
    return view('menu'); // ta page menu (le code que tu as envoyé)
})->name('menu');
