<?php

use Illuminate\Routing\Router;

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
    'domain'        => 'admin.heard.com'
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('mobile/background', 'Mobile\BackgroundController');
    $router->resource('news', 'NewsController');
    $router->resource('notice', 'NoticeController');
});
