<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/error', function () {
    return view('error');
});

Route::get('/experts_team', function () {
    return view('experts_team');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/wealth-management', function () {
    return view('wealth-management');
});

Route::get('/retirement-planning', function () {
    return view('retirement-planning');
});

Route::get('/real-estate', function () {
    return view('real-estate');
});

Route::get('/hedge-funds', function () {
    return view('hedge-funds');
});

Route::get('/private-equity', function () {
    return view('private-equity');
});