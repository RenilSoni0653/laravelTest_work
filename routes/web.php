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

Auth::routes();

Route::get('/profile/{user}', 'ProfileController@show')->name('profile.show');
Route::get('/p/create','ProfileController@create')->name('profile.create');
Route::post('/p','ProfileController@store')->name('profile.store');
Route::get('/p/{user}/edit','ProfileController@edit')->name('profile.edit');
Route::put('/p/{user}','ProfileController@update')->name('profile.update');

Route::get('/a/create','AddressController@create')->name('address.create');
Route::get('/a/edit','AddressController@show')->name('address.show');
Route::post('/a','AddressController@store')->name('address.store');
Route::get('/a/{address}/edit','AddressController@edit')->name('address.edit');
Route::put('/a/{address}','AddressController@update')->name('address.update');
Route::delete('/a/{address}','AddressController@destroy')->name('address.destroy');