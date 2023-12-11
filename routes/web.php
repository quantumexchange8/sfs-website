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

Route::view('/', 'home');

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/detail_about', function () {
    return view('detail_about');
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

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/wealth_management', function () {
    return view('services.wealth_management');
});

Route::get('/retirement_planning', function () {
    return view('services.retirement_planning');
});

Route::get('/real_estate', function () {
    return view('services.real_estate');
});

Route::get('/hedge_funds', function () {
    return view('services.hedge_funds');
});

Route::get('/private_equity', function () {
    return view('services.private_equity');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
