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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

route::get('/','indexController@index');

route::get('/about','indexController@about');

route::get('/rooms','indexController@rooms');

route::get('/booking','indexController@booking');

route::get('/cont','indexController@cont');

route::get('/receptionindex','receptionController@receptionindex');

Route::resource('/room','sebacontroller');
Route::resource('/receptionist','seba1controller');
Route::get('/home', function()
{
return View::make('rooms.home');
});

Route::resource('/reservation','reservationcontroller');
route::resource('/users','userController');
Route::get('home1', function()
{
return View::make('reservations.home');
});

Route::get('login', function () {
    return view('login');
});



