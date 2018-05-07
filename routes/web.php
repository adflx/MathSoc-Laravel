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

Route::get('/', function () {
        return view('home');
    })->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/memberdashboard', function () {
        return view('memberdashboard');
    });
	
Route::get('/officerdashboard', function () {
        return view('officerdashboard');
    });
	
Route::get('/officerdisplay', function () {
        return view('officerdisplay');
    });

Route::get('/officerdisplay', 'OfficerController@display');


Route::get('/memberdisplay', function () {
        return view('memberdisplay');
    });
	
Route::get('/memberdisplay', 'MemberController@display');

	
