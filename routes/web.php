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
    $hello = "Hello World!";


    return view('home', compact('hello'));
})->name('home');

Route::get('/contact', function () {
    $hello = "Hello Contacts!";


    return view('contact', compact('hello'));
})->name('contact');

Route::get('/link', function () {
    $hello = "Hello Links!";


    return view('link', compact('hello'));
})->name('link');

Route::get('/about-us', function () {
    $hello = "Hello There, this is us!";


    return view('about-us', compact('hello'));
})->name('about-us');