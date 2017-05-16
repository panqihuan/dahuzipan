<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//  mobile  路由
//Route::group(['namespace' => 'Mobile', 'domain' => '192.168.1.105', 'as' => 'm.'], function(){
Route::group(['namespace' => 'Mobile', 'domain' => 'm.dahuzipan.com.cn', 'as' => 'm.'], function(){
    require_once 'Routes/route_m.php';
});

//  pc官网路由
Route::group(['namespace' => 'Www', 'domain' => 'home.dahuzipan.com.cn','as' => 'www.'], function(){
    require_once 'Routes/route_www.php';
});

//  pc用户路由
Route::group(['namespace' => 'User', 'domain' => 'user.dahuzipan.com.cn','as' => 'user.'], function(){
    require_once 'Routes/route_user.php';
});