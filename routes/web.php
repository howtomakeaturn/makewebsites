<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
Route::get('/', function () {
    $rows = get_rows();
    return view('welcome', ['rows' => $rows]);
});
*/

Route::get('/dictionary', function () {
    $rows = get_dict_rows();
    return view('dictionary', ['rows' => $rows]);
});

Route::get('/', function () {
    $rows = get_rows();
    return view('index', ['rows' => $rows]);
});

Route::get('/specs', function () {
    $rows = get_rows();
    return view('specs', ['rows' => $rows]);
});

Route::get('/jobs', function () {
    return view('jobs');
});
