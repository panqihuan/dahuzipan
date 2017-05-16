<?php

/**
 * 手机端通用命名空间 app/Http/Controllers/Www
 */

/**
 * 命名空间前缀 Index
 */
Route::group(['namespace' => 'Index'], function(){
    Route::get('/', [ 'as' => 'index', 'uses' => 'HomeController@index']);
    Route::get('login', [ 'as' => 'login', 'uses' => 'HomeController@getLogin']);
    Route::post('login', [ 'as' => 'login', 'uses' => 'HomeController@postLogin']);
    Route::get('reset', [ 'as' => 'login', 'uses' => 'HomeController@getReset']);
});


Route::get('pay_index', 'PayController@index');
Route::get('alipay_pay', 'PayController@alipayPay');
Route::resource('contact', 'Contact\HomeController');
Route::resource('about', 'About\HomeController');
Route::resource('home', 'Home\HomeController');
