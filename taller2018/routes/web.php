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
    return view('welcome');
});


Route::get('/bookings', function () {
    return view('bookings');
});


Route:: resource('cars','CarController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route:: resource('parkings','ParkingController');

Route::post('/insert','Controller@insert');


Route::get('/registerCliente', function () {
    return view('registerCliente');
});
//Reservas
Route::resource('reservations', 'GmapsController');


Route::get('/deleterev  ','Controller@getData');
Route::get('/delete/{id_reservations}','Controller@delete');

