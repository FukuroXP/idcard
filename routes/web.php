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
Route::get('/cetak/{cetak}', 'CetakController@view');

Route::get('/new_frame', 'FramesController@create');
Route::post('/framego', 'FramesController@store');
Route::get('/view/{frame}', 'FramesController@view');


Route::get('/home', 'HomeController@index')->name('home.view');

Route::post('/cetakgo', 'CetakController@store');



Route::get('barcode', 'HomeController@barcode');
Route::get('/barcode','BarcodegeneratorController@barcode');

Route::get('print/{cetak}','CetakController@generatePDF');
