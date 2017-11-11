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

Route::get('/', function () {
    return view('index');
});

Route::get('/prices', function () {
    $rows = get_rows();
    return view('prices', ['rows' => $rows]);
});

Route::get('/dictionary', function () {
    $rows = get_dict_rows();
    return view('dictionary', ['rows' => $rows]);
});

Route::get('/services', function () {
    $rows = get_service_rows();
    return view('services', ['rows' => $rows]);
});

Route::get('/profiles', function () {
    $rows = get_profile_rows();
    return view('profiles', ['rows' => $rows]);
});

Route::get('/community', function () {
    $rows = get_community_rows();

    return view('community', ['rows' => $rows]);
});
