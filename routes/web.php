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




Route::get('/skill', function () {
    return view('skill');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/aboutme', function () {
    return view('aboutme');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/education', function () {
    return view('education');
});

