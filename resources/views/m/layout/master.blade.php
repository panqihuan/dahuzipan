<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,width=device-width">
    <meta content="telephone=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="x5-fullscreen" content="true">
    <meta name="full-screen" content="yes">
    <title>@yield('title')@yield('title-identification', ' - 大胡子•潘')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/general/general.css?'.rand())}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/general/header.css?'.rand())}}">
    <script type="text/javascript" src="{{asset('js/general/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('js/general/zepto.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/m/general/general.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/general/weui.css')}}"/>

    @yield('meta')
</head>
<body>
@section('header')
    <div class="header">
        <div class="header-menu clear">
            <a href="javascript:void(0);">
                <span></span>
                <span></span>
                <span></span>
            </a>
            <div class="mobile-menu">
                <div class="mobile-menu-head">
                    <div class="mobile-mhead clear">
                        <span class="close"></span>
                        <a class="site-link" href="{{route('m.index')}}">
                            <img src="{{asset('image/logo_white.png')}}">
                        </a>
                    </div>
                </div>
                <div class="navigation">
                    <ul>
                        <li class="clear"><a href="{{route('m.la.index')}}">景观设计师</a></li>
                        <li class="clear"><a href="{{route('m.cases.index')}}">设计案例</a></li>
                        <li class="clear"><a href="">项目</a></li>
                        <li class="clear"><a href="{{route('m.ideas.index')}}">想法</a></li>
                        <li class="clear"><a href="{{route('m.contact.index')}}">联系我们</a></li>
                        <li class="clear last"><a href="{{route('m.about.index')}}">关于我们</a></li>
                    </ul>
                </div>
                <form action="master.blade.php" method="post" class="search-form">
                    <input placeholder="搜索"/>
                </form>
            </div>
        </div>
        <div class="header-logo"><img src="{{asset('image/logo.png')}}"/></div>
        <div class="header-my">
            <a href="{{route('m.login')}}">
                <img src="{{asset('image/my.png')}}"/>
            </a>
        </div>
    </div>
@show
@yield('container')
@yield('footer')

</body>
</html>