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
    ///return view('welcome');
    return 'Hey! You\'re at Hamza\'s root!';
});

Route::get('/hello',function(){
  return 'Hello World!';
});

/* Assigning the list and show URLs to AccountController with List and Show actions */
Route::get('list', 'AccountController@list');

Route::get('/show/{id}', 'AccountController@show');

Auth::routes(); // helper class which generates all routes for required user authentication

Route::get('/home', 'HomeController@index')->name('home'); // assigns home controller to the HomeController with an index function, named as home

Route::get('display', 'AccountController@display')->name('display_account');
