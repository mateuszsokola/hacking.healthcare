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

Route::get('/what-we-achieved', function () {
    return view('pages/what-we-achieved');
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

Route::get('/sponsors', function () {
    return view('pages/sponsors');
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

Route::get('/sponsors.html', function () {

    return redirect('/sponsors', 301);
});

//
// Handle "Gone" pages for SEO reasons
//
Route::get('/speakers', function () {
    $view = view('errors/404');

    return response($view, 410);
});

Route::get('/speaker-lineup/{name}', function () {
    $view = view('errors/404');

    return response($view, 410);
});

Route::get('/tickets.html', function () {
    $view = view('errors/404');

    return response($view, 410);
});

Route::get('/contact.html', function () {
    $view = view('errors/404');

    return response($view, 410);
});
