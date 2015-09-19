<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/upcoming', function () {
    return view('pages/upcoming');
});

Route::get('/upcoming/berlin-2015', function () {
    return view('pages/berlin-2015');
});

Route::get('/past', function () {
    return view('pages/past');
});

Route::get('/team', function () {
    return view('pages/team');
});

Route::get('/privacy', function () {
    return view('pages/privacy');
});

Route::get('/imprint', function () {
    return view('pages/imprint');
});
