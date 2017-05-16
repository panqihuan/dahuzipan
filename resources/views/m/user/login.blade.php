@extends('m.layout.master')

@section('title', '首页')

@section('meta')
    <script type="text/javascript" src="{{asset('js/m/plugins.js')}}"></script>
    {{--    <script type="text/javascript" src="{{asset('js/m/jquery-1.9.1.min.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('js/m/jquery.bxslider.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/general/jquery.bxslider.css?'.rand())}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fonts/dashicons.css?'.rand())}}">
    <style>
        body, html{
            background: #f1f1f1;
        }
        .login{
            padding: 20px 0;
            width: 320px;
            margin: auto;
        }
        .login form{
            margin-top: 20px;
            margin-left: 0;
            padding: 26px 24px 46px;
            background: #fff;
            -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.13);
            box-shadow: 0 1px 3px rgba(0,0,0,.13);
        }
        .logo{
            text-align: center;
            padding: 30px;
        }
        .login p{
            display: block;
            -webkit-margin-before: 1em;
            -webkit-margin-after: 1em;
            -webkit-margin-start: 0px;
            -webkit-margin-end: 0px;
            line-height: 1.5;
            margin: 0;
        }
        .login label{
            color: #72777c;
            font-size: 14px;
        }
        .login form .forgetmenot {
            font-weight: 400;
            float: left;
            margin-bottom: 0;
            height: 30px;
            padding: 4px 0;
        }
        .login form .input, .login input[type=text] , .login input[type=tel] {
            font-size: 20px;
            text-indent: 8px;
            width: 100%;
            padding: 3px;
            margin: 2px 6px 16px 0;
            background: #fbfbfb;
            -webkit-appearance: none;
            border: 1px solid #ddd;
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.07);
            box-shadow: inset 0 1px 2px rgba(0,0,0,.07);
            color: #32373c;
            outline: 0;
            -webkit-transition: 50ms border-color ease-in-out;
            transition: 50ms border-color ease-in-out;
            height: 41px;
        }
        input[type=radio], input[type=checkbox] {
            height: 25px;
            width: 25px;
            border: 1px solid #b4b9be;
            color: #555;
            clear: none;
            cursor: pointer;
            display: inline-block;
            line-height: 0;
            margin: -4px 4px 0 0;
            outline: 0;
            padding: 0!important;
            text-align: center;
            vertical-align: middle;
            min-width: 16px;
            -webkit-appearance: none;
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
            box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
            -webkit-transition: .05s border-color ease-in-out;
            transition: .05s border-color ease-in-out;
            background: #fbfbfb;
        }
        p.submit {
            text-align: left;
            -webkit-border-bottom-left-radius: 3px;
            border-bottom-left-radius: 3px;
            -webkit-border-bottom-right-radius: 3px;
            border-bottom-right-radius: 3px;
            border: none;
            margin: 0;
            padding: 0;
        }
        input[type=submit]{
            padding: 4px 13px;
            line-height: normal;
            font-size: 14px;
            vertical-align: middle;
            height: auto;
            margin-bottom: 4px;
            float: right;
            background: #0085ba;
            border-color: #0073aa #006799 #006799;
            -webkit-box-shadow: 0 1px 0 #006799;
            box-shadow: 0 1px 0 #006799;
            color: #fff;
            text-decoration: none;
            text-shadow: 0 -1px 1px #006799,1px 0 1px #006799,0 1px 1px #006799,-1px 0 1px #006799;
            display: inline-block;
            cursor: pointer;
            border-width: 1px;
            border-style: solid;
            -webkit-appearance: none;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            white-space: nowrap;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        input[type=radio]:checked:before, input[type=checkbox]:checked:before {
            float: left;
            display: inline-block;
            vertical-align: middle;
            width: 16px;
            font: 400 21px/1 dashicons;
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        input[type=checkbox]:checked:before {
            content: "\f147";
            color: #1e8cbe;
            font: 400 30px/1 dashicons;
            margin: -2px -5px;
        }
        .login-footer{
            padding: 10px;
        }
        .login-footer p{
            padding-top: 10px;
        }
        .login-footer a{
            text-decoration: none;
            color: #555d66;
        }
    </style>
@endsection

@section('header')
    <div class="login">
        <div class="logo">
            <a href="{{route('m.index')}}">
                <img src="{{asset('image/logo.png')}}">
            </a>
        </div>
        <form action="{{route('m.login')}}" method="post" class="clear">
            <p>
                <label for="user_login">手机号<br>
                    <input type="tel" name="cellphone" id="user_login" class="input" value="" size="20"></label>
            </p>
            <p>
                <label for="user_pass">密　码<br>
                    <input type="password" name="password" id="user_pass" class="input" value="" size="20"></label>
            </p>
            <p class="forgetmenot">
                <label for="remember">
                    <input name="remember" type="checkbox" id="remember" value="forever"> 记住我
                </label>
            </p>
            <p class="submit">
                <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登　录">
            </p>
            {{csrf_field()}}
        </form>
        <div class="login-footer">
            <p>
                <a href="{{route('m.login')}}">忘记密码?</a>
            </p>
            <p>
                <a href="{{route('m.login')}}">← 返回 </a>
            </p>
        </div>
    </div>
@endsection


@section('footer')
    {{--@include('m.layout.footer')--}}
@endsection