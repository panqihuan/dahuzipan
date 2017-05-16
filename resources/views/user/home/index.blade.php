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
    <script type="text/javascript" src="{{asset('js/general/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/general/jquery.pjax.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/general/general.js?'.rand())}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/general/general.css?'.rand())}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/general/paginate.css?'.rand())}}">
    <script type="text/javascript" src="{{asset('wangEditor/src/js/wangEditor.js?'.rand())}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('wangEditor/src/css/wangEditor.css?'.rand())}}">
    <script>
        $(function(){
            var all = $('.all');
            $('.menu_button').click(function(){
                if(all.hasClass('open')){
                    all.removeClass('open');
                }else{
                    all.addClass('open');
                }
            });
        })
    </script>
    <style>
        html, body {
            width: 100%;
            height: 100%;
            min-width: 767px;
            overflow: hidden;
            color: #666;
            /*font-family: "Noto Sans",sans-serif;*/
            font-family: "Helvetica Neue", "Luxi Sans", "DejaVu Sans", Tahoma, "Hiragino Sans GB", STHeiti, "Microsoft YaHei";
            -webkit-font-smoothing: antialiased;
            font-weight: normal;
            font-size: 12px;
            font-style: normal;
            transform: translate3d(0, 0, 0);
        }

        .all{
            height: 100%;
            width: 100%;
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -moz-transition: -moz-transform 287ms cubic-bezier(0.215, 0.61, 0.355, 1);
            -o-transition: -o-transform 287ms cubic-bezier(0.215, 0.61, 0.355, 1);
            -webkit-transition: -webkit-transform 287ms cubic-bezier(0.215, 0.61, 0.355, 1);
            transition: transform 287ms cubic-bezier(0.215, 0.61, 0.355, 1);
        }
        .all.open {
            -moz-transform: translate3d(236px, 0, 0);
            -ms-transform: translate3d(236px, 0, 0);
            -webkit-transform: translate3d(236px, 0, 0);
            transform: translate3d(236px, 0, 0);
        }

        /*头部*/
        .top_bar{
            height: 50px;
            position: fixed;
            /*background-color: black;*/
            background-color: #374452;
            border-left: 1px solid #2a2f32;
            width: calc(100% - 50px);
            left: 50px;
            top: 0;
        }
        .top_bar > * {
            height: 100%;
        }
        .top_bar > *:hover {
            background-color: #2A2A2A;
        }

        /*头部左*/
        .top_bar .top_bar_left{
            float: left;
        }
        .top_bar .top_bar_left .home{
            display: block;
            height: 100%;
            text-align: center;
            line-height: 50px;
            color: white;
            padding: 0 20px;
            border-right: 1px solid #2A2A2A;
            font-size: 14px;
        }

        /*头部右*/
        .top_bar .top_bar_right{
            float: right;
        }
        .top_bar .top_bar_right .logout{
            display: block;
            height: 100%;
            text-align: center;
            line-height: 50px;
            color: white;
            padding: 0 30px;
            border-left: 1px solid #2A2A2A;
            font-size: 14px;
        }

        /*导航*/
        .side_bar{
            position: absolute;
            left: -236px;
            /*left: 0;*/
            /*top: -60px;*/
            top: 0;
            /*width: 236px;*/
            width: 286px;
            height: calc(100% + 60px);
            z-index: 1;
        }
        .side_bar > div{
            height: 100%;
            float: left;
        }

        /*导航左*/
        .side_bar .side_bar_warp{
            width: 236px;
            /*background-color: #374452;*/
            background-color: black;
        }
        .side_bar .side_bar_warp .side_bar_warp_top{
            padding: 5px 28px;
            border-bottom: 1px solid #2A2A2A;
            height: 50px;
            /*background-color: black;*/
            /*background-color: #374452;*/
        }
        .side_bar .side_bar_warp .side_bar_warp_top img{
            float: left;
            height: 40px;
            width: 180px;
        }


        /*导航右*/
        .side_bar .side_bar_bar{
            width: 50px;
            /*background-color: black;*/
            background-color: #374452;
        }
        .side_bar .side_bar_bar .side_bar_bar_top{
            height: 50px;
            padding: 10px;
            border-bottom: 1px solid #2A2A2A;
        }
        .side_bar .side_bar_bar .side_bar_bar_top img{
            float: left;
            height: 30px;
            width: 30px;
        }
        .side_bar .side_bar_bar .side_bar_bar_content{
            padding-top: 10px;
        }
        .side_bar .side_bar_bar .side_bar_bar_content .menu_button{

            width: 26px;
            height: 20px;
            background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjIuMSwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHdpZHRoPSIzMi4xNjZweCIgaGVpZ2h0PSIyNC4zMzRweCIgdmlld0JveD0iMCAwIDMyLjE2NiAyNC4zMzQiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDMyLjE2NiAyNC4zMzQiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8cGF0aCBmaWxsPSIjQUVBRUFFIiBkPSJNMzIuMTY2LDMuNTg0YzAsMC41NTMtMC40NDYsMS0xLDFIMWMtMC41NTMsMC0xLTAuNDQ3LTEtMVYxYzAtMC41NTMsMC40NDctMSwxLTFoMzAuMTY2CgljMC41NTQsMCwxLDAuNDQ3LDEsMVYzLjU4NHoiLz4KPHBhdGggZmlsbD0iI0FFQUVBRSIgZD0iTTMyLjE2NiwxMy4zMzRjMCwwLjU1My0wLjQ0NiwxLTEsMUgxYy0wLjU1MywwLTEtMC40NDctMS0xVjEwLjc1YzAtMC41NTMsMC40NDctMSwxLTFoMzAuMTY2CgljMC41NTQsMCwxLDAuNDQ3LDEsMVYxMy4zMzR6Ii8+CjxwYXRoIGZpbGw9IiNBRUFFQUUiIGQ9Ik0zMi4xNjYsMjMuMzM0YzAsMC41NTMtMC40NDYsMS0xLDFIMWMtMC41NTMsMC0xLTAuNDQ3LTEtMVYyMC43NWMwLTAuNTUzLDAuNDQ3LTEsMS0xaDMwLjE2NgoJYzAuNTU0LDAsMSwwLjQ0NywxLDFWMjMuMzM0eiIvPgo8L3N2Zz4K');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            -moz-transition: opacity 111ms ease-out;
            -o-transition: opacity 111ms ease-out;
            -webkit-transition: opacity 111ms ease-out;
            transition: opacity 111ms ease-out;
            margin-left: auto;
            margin-right: auto;
            cursor: pointer;
            opacity: 0.5;
        }
        .side_bar .side_bar_bar .side_bar_bar_content .menu_button:hover{
            opacity: 1;
        }




        .all_main{
            position: fixed;
            position: relative;
            top: 50px;
            left: 50px;
            height: calc(100% - 50px);
            width: calc(100% - 50px);
            z-index: 0;
            overflow-y: auto;
        }
    </style>
</head>
<body>
<div class="all">
    <div class="top_bar">
        <div class="top_bar_left clear">
            <a class="home" href="{{env('USER_URL')}}">大胡子控制台</a>
        </div>
        <div class="top_bar_right clear">
            <a class="logout" href="{{route('user.logout')}}">退出</a>
        </div>
    </div>
    <div class="side_bar">
        <div class="side_bar_warp">
            <div class="side_bar_warp_top clear"><img src="{{asset('image/user/user_logo_white.png')}}"/></div>
            <div class="side_bar_warp_content"></div>
        </div>
        <div class="side_bar_bar">
            <div class="side_bar_bar_top clear"><img src="{{asset('image/20170307103982648264.jpg')}}"/> </div>
            <div class="side_bar_bar_content">
                <div class="menu_button"></div>
            </div>
        </div>
    </div>
    <div class="all_main">
    </div>
</div>
</body>
</html>