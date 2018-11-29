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

Auth::routes();

Route::resource('/bookings','ReservationController');
Route::resource('/checkin','CheckInController');
Route::resource('/checkout','CheckOutController');


Route:: resource('cars','CarController');

Route::get('/home', 'HomeController@index')->name('home');
Route:: resource('parkings','ParkingController');
Route::get('parkings/pdfexport/{id_parkings}','ParkingController@pdfexport');

Route::post('/insert','Controller@insert');


Route::get('/registerCliente', function () {
    return view('registerCliente');
});
//Reservas
Route::resource('reservations', 'GmapsController');
//Roles
Route::resource('roles', 'RoleController');
//Reservation Client
Route:: resource('reservationClients','ReservationClientController');


Route::resource('users_roles', 'UserRoleController');

Route::get('/deleterev  ','Controller@getData');
Route::get('/delete/{id_reservations}','Controller@delete');

Route::post('/login/custom', [
        'uses' => 'LoginController@login',
        'as' => 'login.custom'
    ]);

Route::get('/administradorhome', function (){
    return view('administradorhome');
})->name('administradorhome');

Route::get('/clientehome', function (){
    return view('clientehome');
})->name('clientehome');

/*Route::group(['middleware' => 'auth'], function(){

    Route::get('/administradorhome', function (){
        return view('administradorhome');
    })->name('administradorhome');

    Route::get('/clientehome', function (){
        return view('clientehome');
    })->name('clientehome');

});*/
