<?php

use Illuminate\Support\Facades\Route;


Route::get('/{any?}', function () {
    return view('welcome');
})->where('any','^(?!api\/)[\/\w.-]*');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
