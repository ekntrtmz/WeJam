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
})->name('welcome');

//  Laravel's built-in Auth package
Auth::routes([
    //  Disable Register temporarly
    'register' => false
]);

//  City
Route::get('/global', 'CityController@global')->name('cities.global');
Route::get('/{City}', 'CityController@city')->name('cities.city')->where('City', '[a-z]+');;

//  User
Route::get('/artists', 'UserController@artists')->name('users.artists');
Route::get('/artists/{User}', 'UserController@artist')->name('users.artist');
//  Route::get('/me', 'UserConroller@me')->name('users.me'); //  with middleware(auth)


//  Jam
Route::get('/jam-sessions', 'JamController@jam_sessions')->name('jams.jam_sessions');
Route::get('/jam-sessions/{Jam}', 'JamController@jam_session')->name('jams.jam_session');

Route::get('/open-mics', 'JamController@open_mics')->name('jams.open_mics');
Route::get('/open-mics/{Jam}', 'JamController@open_mic')->name('jams.open_mic');

Route::get('/home', 'HomeController@index')->name('home');
