<?php

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

Route::resource('user', 'UsersController');

Route::get('/', function () {
    $siteTitle = "Learning Laravel";

    return view('welcome', compact('siteTitle'));
});

Route::get('/docs', function() {
    $docsTitle = 'Hello World!';

    return view('docs', compact('docsTitle'));
})->name('dansdocs');

Route::get('/about', 'HomeController@index');