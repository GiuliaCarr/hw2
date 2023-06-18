<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return redirect('login');
});


Route::get('register',  'App\Http\Controllers\LoginController@register');
Route::post('register', 'App\Http\Controllers\LoginController@do_register');
Route::get('check/{username}', 'App\Http\Controllers\LoginController@checkuser');
Route::get('checkk/{email}', 'App\Http\Controllers\LoginController@checkemail');
Route::get('logout', 'App\Http\Controllers\LoginController@logout');
Route::get('login', 'App\Http\Controllers\LoginController@login');
Route::post('login', 'App\Http\Controllers\LoginController@do_login');


Route::get('home', 'App\Http\Controllers\HomeController@home');
Route::get('characters', 'App\Http\Controllers\HomeController@characters');
Route::get('twitch', 'App\Http\Controllers\HomeController@twitch');
Route::get('profile', 'App\Http\Controllers\HomeController@profile');
Route::get('visions', 'App\Http\Controllers\HomeController@visions');
Route::get('about', 'App\Http\Controllers\HomeController@about');
    
Route::get('characters/load', 'App\Http\Controllers\APIController@loadcharacters');
Route::get('characters/fav', 'App\Http\Controllers\APIController@favcharacters');
Route::post('characters/save', 'App\Http\Controllers\APIController@save');
Route::post('characters/delete', 'App\Http\Controllers\APIController@delete');
Route::get('characters/search/{character}', 'App\Http\Controllers\APIController@search');

Route::get('twitch/load', 'App\Http\Controllers\APIController@loadstreamers');
Route::get('twitch/fav', 'App\Http\Controllers\APIController@favstreamers');
Route::post('twitch/save', 'App\Http\Controllers\APIController@savestream');
Route::post('twitch/delete', 'App\Http\Controllers\APIController@deletestream');

Route::post('profile/save', 'App\Http\Controllers\APIController@savepic');
Route::get('profile/load', 'App\Http\Controllers\APIController@loadprofile');






