<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Support\Facades\Route;



Route::get('/', 'DeviceController@index' ) 
    -> name('home-devices');

Route::get('/device/{id}' , 'DeviceController@show')
    -> name('show-device');

Route::get('/new/device/create' , 'DeviceController@create')
    -> name('create-device');
    
Route::post('/new/device/store' , 'DeviceController@store')
    -> name('store-device');