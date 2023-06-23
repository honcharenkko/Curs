<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



/*MAIN SECTION*/
Route::get('/index', function () {
    return view('index');
});
Route::get('/action', function () {
    return view('mainpages/action');
});
Route::get('/location', 'App\Http\Controllers\AddressController@index')->name('location');
Route::get('/about', function () {
    return view('mainpages/uberuns');
});
Route::get('/menu', function () {
    return view('mainpages/menu');
});

/*PRODUCTS*/
Route::get('/eat1', function () {
    return view('containersss/eat1');
});
Route::get('/eat2', function () {
    return view('containersss/eat2');
});
Route::get('/eat3', function () {
    return view('containersss/eat3');
});
Route::get('/eat4', function () {
    return view('containersss/eat4');
});

/*DRINKS*/
Route::get('/drink1', function () {
    return view('containersss/drink1');
});
Route::get('/drink2', function () {
    return view('containersss/drink2');
});
Route::get('/drink3', function () {
    return view('containersss/drink3');
});
Route::get('/drink4', function () {
    return view('containersss/drink4');
});

/*ACTIONS*/
Route::get('/sale1', function () {
    return view('containersss/sale1');
});
Route::get('/sale2', function () {
    return view('containersss/sale2');
});
Route::get('/sale3', function () {
    return view('containersss/sale3');
});

/*TELEFON*/
Route::get('/telmein', function () {
    return view('mainpages/telmein');
});
Route::get('/locationtel', function () {
    return view('containersss/locationtel');
});
Route::get('/salestel', function () {
    return view('containersss/salestel');
});


/*TELE DRINK*/
Route::get('/teldrink1', function () {
    return view('containersss/teldrink1');
});
Route::get('/teldrink2', function () {
    return view('containersss/teldrink2');
});
Route::get('/teldrink3', function () {
    return view('containersss/teldrink3');
});
Route::get('/teldrink4', function () {
    return view('containersss/teldrink4');
});

/*TELE EAT*/
Route::get('/teleat1', function () {
    return view('containersss/teleat1');
});
Route::get('/teleat2', function () {
    return view('containersss/teleat2');
});
Route::get('/teleat3', function () {
    return view('containersss/teleat3');
});
Route::get('/teleat4', function () {
    return view('containersss/teleat4');
});

/*TELE SALES*/
Route::get('/telsale1', function () {
    return view('containersss/telsale1');
});
Route::get('/telsale2', function () {
    return view('containersss/telsale2');
});
Route::get('/telsale3', function () {
    return view('containersss/telsale3');
});