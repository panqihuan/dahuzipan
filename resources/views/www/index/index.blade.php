<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta content="telephone=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="x5-fullscreen" content="true">
    <meta name="full-screen" content="yes">
    <title>大胡子潘</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/general/general.css?'.rand())}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/general/header.css?'.rand())}}">
    <script type="text/javascript" src="{{asset('js/general/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/general/jquery.pjax.js')}}"></script>
    <script src="{{asset('js/general/zepto.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/www/general/general.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/general/weui.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/www/general/general.css')}}"/>
</head>
<body>
<div class="app">
    <div class="nav">
        <div class="nav-warp"></div>
        <div class="nav-bar">
            <div class="menu_button"></div>
        </div>
    </div>
    <div class="three">
        <div class="button-base" slug="home">
            <div>
                <h1>工具</h1>
                <span class="block"></span>
            </div>
            <div>
                <h1>工具</h1>
                <span class="block"></span>
                <span class="bottom-border"></span>
            </div>
        </div>
        <div class="button-base" slug="contact">
            <div>
                <h1>联系我们</h1>
                <span class="block"></span>
            </div>
            <div>
                <h1>联系我们</h1>
                <span class="block"></span>
                <span class="bottom-border"></span>
            </div>
        </div>
        <div class="button-base" slug="about">
            <div>
                <h1>关于我们</h1>
                <span class="block"></span>
            </div>
            <div>
                <h1>关于我们</h1>
                <span class="block"></span>
                <span class="bottom-border"></span>
            </div>
        </div>
        <div class="button-base" slug="direction">
            <div>
                <h1>路线</h1>
                <span class="block"></span>
            </div>
            <div>
                <h1>路线</h1>
                <span class="block"></span>
                <span class="bottom-border"></span>
            </div>
        </div>
        <div class="button-base" slug="login">
            <div>
                <h1>登录</h1>
                <span class="block"></span>
            </div>
            <div>
                <h1>登录</h1>
                <span class="block"></span>
                <span class="bottom-border"></span>
            </div>
        </div>
    </div>

    <div class="main"></div>
</div>
</body>
</html>