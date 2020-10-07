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
    return view('index');
});


Route::get('/about-us', function () {
    return view('aboutus');
});



Route::get('/teams', function () {
    return view('teams');
});

Route::get('/services', function () {
    return view('all-services');
});


Route::get('/web-dev', function () {
    return view('web-dev');
});


Route::get('/ios-dev', function () {
    return view('ios-dev');
});

Route::get('/android-dev', function () {
    return view('android-dev');
});

Route::get('/ui-ux', function () {
    return view('ui-ux');
});


Route::get('/seo-digital-marketing', function () {
    return view('seo');
});

Route::get('/contact-us', function () {
    return view('contact');
});
