<?php

/**
 * 手机端通用命名空间 app/Http/Controllers/User
 */


/**
 * 后台无需登录访问路由
 */
Route::group(['namespace' => 'User'], function(){

    //  验证是否登录
    Route::get('checkLogin', [ 'as' => 'checkLogin', 'uses' => 'HomeController@checkLogin']);

    //  登录
    Route::get('login', [ 'as' => 'login', 'uses' => 'HomeController@login']);

    //  退出
    Route::get('logout', [ 'as' => 'logout', 'uses' => 'HomeController@logout']);
});

/**
 * 后台登录后访问路由
 */
Route::group(['middleware' => ['auth']], function(){

    //  首页
    Route::get('/', 'Home\HomeController@index');

    //  新闻公告
    Route::resource('news', 'News\HomeController');
});
