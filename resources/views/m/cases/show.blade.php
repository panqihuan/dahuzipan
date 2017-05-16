@extends('m.layout.master')

@section('title', '首页')

@section('meta')
    <script type="text/javascript" src="{{asset('js/m/jquery.bxslider.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/general/jquery.bxslider.css?'.rand())}}">
    <style>
        html, body{
            background-color: rgb(242,242,242)!important;
            height: 100%;
            overflow: hidden;
        }
        .cases{

        }
        .cases .cases-title{
            font-size: 20px;
            letter-spacing: 3px;
            font-weight: bold;
            padding-bottom: 12px;
            padding-top: 2px;
        }
        .cases .cases-other{
            display: -webkit-box;
            display: -ms-flexbox;
            padding: 8px 0;
            border-bottom: 1px solid #D0D0D0;
        }
        .cases .cases-other .other-left{
            float: left;
            width: 120px;
            position: relative;
            text-align: center;
            padding: 5px 15px 0 15px;
            height: 100px;
            overflow: hidden;
        }
        .cases .cases-other .other-left img{
            width: 72px;
            height: 72px;
            display: block;
            margin: 0 auto 5px auto;
            border-radius: 5px;

        }
        .cases .cases-other .other-right{
            -webkit-box-flex: 1;
            -ms-flex: 1;
        }
        .cases .cases-other .other-right .right-type{
            float: left;
            background-color: #0059e7;
            padding: 3px 7px;
            margin-right: 15px;
            margin-bottom: 8px;
            border-radius: 3px;
            color: white;
        }

        .bx-wrapper{
            position: absolute;
            width: 100%;
            height: calc(100% - 190px);
            bottom: 0;
            margin: 0;
        }
        .bx-viewport{
            background-color: transparent!important;
            -webkit-box-shadow:none!important;
        }
        .bx-pager{
            bottom: 0!important;
            /*background-color: rgb(242,242,242)!important;*/
        }
        .slide img{
            margin: 0 auto;
        }
        .slide-img{
            padding-top: 61.8%;
            position: relative;
        }
        .slide-img:before{
            content: '';
            display: block;
            position: absolute;
            bottom: 0;
            border-bottom: 1px solid red;
            width: 80%;
            left: 10%;
        }
        .slide-img img{
            position: absolute;
            max-width: 80%!important;
            max-height: 80%!important;
            top: 50%;
            left: 50%;
        }
        .slide-detail{
            padding: 10px 10% 0;
            overflow: hidden;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            -webkit-box-sizing: border-box;
            -webkit-line-clamp: 5;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            word-break: break-all;
            line-height: 20px;
            max-height: 110px;
        }
        .bx-wrapper .bx-loading {
            min-height: 50px;
            background: url(/image/bx_loader.gif) center center no-repeat;
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2000;
        }
    </style>
    <script>
        $(function(){
            $('.slider').bxSlider({
                slideWidth: 600,
                slideHeight: 300,
                infiniteLoop: false,
                pager: true,
                pagerType:'short',
                hideControlOnEnd: true,
                controls:false,
//                touchEnabled:false
                slideMargin: 10
            });
            function listenHtml(){
                $('html').bind('touchstart', function (ev) {
                    event.preventDefault();
                });
            }
            function unListenHtml(){
                $('html').unbind('touchstart');
            }
            $('.bx-wrapper')
                    .on('touchstart', function(e) {
                        listenHtml();
                    })
                    .on('touchmove', function(e) {
                    })
                    .on('touchend', function(e) {
                        unListenHtml();
                    });
            var slideImg = $('.slide-img img');
            var imgCount = slideImg.length;
            console.log('imgCount : ' + imgCount);
            var initing = true;
            initImg();

            function initImg(){
                if(!initing) return false;
                var initCount = 0;
                slideImg.each(function(index, value){
                    var thisImg = slideImg.eq(index);
                    thisImg.load(function(){
                        console.log(thisImg.width());
                        initCount++;
                        thisImg.css({marginLeft:'-' + thisImg.width() / 2 + 'px',marginTop:'-' + thisImg.height() / 2 + 'px'});
                    });
                });
                console.log('initCount : ' + initCount);
                if(initCount != imgCount){
//                    initImg();
                }else{
                    initing = false;
                }
                $('.slide-detail').css('height', $(window).height() - (190 + $(window).width()*0.618 + 40));
                $('.bx-loading').css('height', $(window).width()*0.618);
            }
        })
    </script>
@endsection

@section('container')

    <div class="cases">
        <div class="cases-other">
            <a href="{{route('m.la.show', 1)}}" class="other-left">
                <img src="{{asset('image/20170307103982648264.jpg')}}"/>大胡子•潘
            </a>
            <div class="other-right">
                <div class="cases-title">测试标题</div>
                <div class="right-type">现代简约</div>
                <div class="right-type">平层</div>
                <div class="right-type">136㎡</div>
                <div class="right-type">15.78万</div>
            </div>
        </div>

        <div class="slider">
            <div class="slide">
                <div class="slide-img">
                    <img src="http://placehold.it/600x200&text=FooBar1">
                    {{--<img src="{{asset('image/20170307103982648264.jpg')}}"/>--}}
                </div>
                <div class="slide-detail">的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多</div>
            </div>
            <div class="slide">
                <div class="slide-img">
                    <img src="http://placehold.it/600x200&text=FooBar2">
                    {{--<img src="{{asset('image/20170307103982648264.jpg')}}"/>--}}
                </div>
                <div class="slide-detail">的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多</div>
            </div>
            <div class="slide">
                <div class="slide-img">
                    <img src="http://placehold.it/500x240&text=FooBar3">
                    {{--<img src="{{asset('image/20170307103982648264.jpg')}}"/>--}}
                </div>
                <div class="slide-detail">的顶顶顶顶顶顶顶顶顶顶多dddddd多多多顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多</div>
            </div>
            <div class="slide">
                <div class="slide-img">
                    <img src="http://placehold.it/600x200&text=FooBar4">
                    {{--<img src="{{asset('image/20170307103982648264.jpg')}}"/>--}}
                </div>
                <div class="slide-detail">的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大dd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多的顶顶顶顶顶顶顶顶顶顶多dddddd多多多多大多</div>
            </div>
        </div>
    </div>
@endsection


@section('footer')
    {{--@include('m.layout.footer')--}}
@endsection