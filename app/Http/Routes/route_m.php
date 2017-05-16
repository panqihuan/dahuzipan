<?php

/**
 * 手机端通用命名空间 app/Http/Controllers/Mobile
 */


/**
 * 命名空间前缀 HOME
 */
Route::group(['namespace' => 'Home'], function(){

    //  首页
    Route::get('/', [ 'as' => 'index', 'uses' => 'HomeController@index']);

    //  登录页面
    Route::get('login', [ 'as' => 'login', 'uses' => 'HomeController@getLogin']);

    //  登录提交
    Route::post('login', [ 'as' => 'login', 'uses' => 'HomeController@postLogin']);
});

//  关于我们
Route::resource('about', 'About\HomeController');

//  案例
Route::resource('cases', 'Cases\HomeController');

//  联系我们
Route::resource('contact', 'Contact\HomeController');

//  主意
Route::resource('ideas', 'Ideas\HomeController');

//  景观设计师
Route::resource('la', 'LandscapeArchitect\HomeController');

//  新闻
Route::resource('news', 'News\HomeController');