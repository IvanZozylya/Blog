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

Route::get('/','Admin\IndexController@show')->name('home');

//Test

Route::prefix('admin')->group(function (){
    Route::resource('page',"Admin\CoreResource");
});


Route::match(['get','post'],'/contact/{name?}','FirstController@getContact')->name('contact');


Route::get('/about','FirstController@show')->name('about');
