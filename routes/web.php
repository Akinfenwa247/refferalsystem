<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('signup', 'RegisterController@sign_up')->name('signup');
Route::get('register/{register}', 'RegisterController@referred_sign_up');
Route::get('invite', 'InviteController@invite')->name('invite');
