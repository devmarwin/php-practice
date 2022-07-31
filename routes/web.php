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
    return view('welcome');
});

Route::get('/answer1', function () {
    return view('answer1');
});

Route::get('/answer2', function () {
    return view('answer2');
});

Route::get('/answer3', function () {
    return view('answer3');
});

Route::get('/answer4', function () {
    return view('answer4');
});

Route::get('/answer5', function () {
    return view('answer5');
});

Route::get('/answer6', function () {
    return view('answer6');
});

Route::get('/answer7', function () {
    return view('answer7');
});

Route::get('/answer8', function () {
    return view('answer8');
});

Route::get('/answer9', function () {
    return view('answer9');
});

Route::get('/answer10', function () {
    return view('answer10');
});