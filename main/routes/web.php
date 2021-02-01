<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Support\Facades\Route;



Route::get('/', 'DeviceController@index' ) 
    -> name('home-devices');

Route::get('/device/{id}' , 'DeviceController@show')
    -> name('show-device');

Route::get('/new/device/create' , 'DeviceController@create')
    -> name('create-device');
    
Route::get('/new/device/store' , 'DeviceController@store')
    -> name('store-device');

Route::get('/device/delete/{id}' , 'DeviceController@destroy')
    -> name('delete-device');

Route::get('/device/store/{id}', 'DeviceController@edit')->name('edit-device');
   Route::post('/device/update/{id}', 'DeviceController@update')->name('update-device');