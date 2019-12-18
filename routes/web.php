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

//  Landingpage
Route::get('/', function () {

    //  Redirect user to home if logged in
    if (Auth::check()) {
        return redirect('/home');
    }

    return view('welcome');
});

//  Laravel's built-in Auth package
Auth::routes([
    //  Disable Register temporarly
    'register' => false
]);


Route::get('/home', 'HomeController@index')->name('home');
