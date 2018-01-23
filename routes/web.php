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

use App\Mail\SendReferralMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('signup', 'RegisterController@sign_up')->name('signup');
Route::get('register/{register}', 'RegisterController@referred_sign_up');
Route::get('cookie', 'RegisterController@cookie')->name('cookie');
Route::post('invite', 'InviteController@invite')->name('invite');



/*Route::get('send', function(){
    Mail::to('akinfenwasamson@gmail.com')->send(new SendReferralMail());
    return ('sent');
});*/
