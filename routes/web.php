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

Route::get('/feed', 'FeedController@importExport');
Route::get('sendfeedmail/{type}', 'FeedController@sendfeedmail');
Route::post('importExcelFeed', 'FeedController@importExcelFeed');



Route::get('/medicine', 'MedicineController@importExport');
Route::get('sendmedicinemail/{type}', 'MedicineController@sendmedicinemail');
Route::post('importExcelMedicine', 'MedicineController@importExcelMedicine');


Route::get('/factory', 'FactoryController@importExport');
Route::get('sendfactorymail/{type}', 'FactoryController@sendfactorymail');
Route::post('importExcelFactory', 'FactoryController@importExcelFactory');


Route::get('/farm', 'FarmController@importExport');
Route::get('sendfarmmail/{type}', 'FarmController@sendfarmmail');
Route::post('importExcelFarm', 'FarmController@importExcelFarm');


Route::get('/bun', 'BunController@importExport');
Route::get('sendbunmail/{type}', 'BunController@sendbunmail');
Route::post('importExcelBun', 'BunController@importExcelBun');