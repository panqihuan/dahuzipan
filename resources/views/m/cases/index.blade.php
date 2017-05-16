@extends('m.layout.master')

@section('title', '首页')

@section('meta')
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/cases/list.css?'.rand())}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/cases/index.css?'.rand())}}">
    <script type="text/javascript" src="{{asset('js/m/jquery.bxslider.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/general/jquery.bxslider.css?'.rand())}}">
    <script type="text/javascript" src="{{asset('js/m/general/slider.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/general/weui2.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/general/weui3.css')}}"/>
    <script src="{{asset('js/general/iscroll.js')}}"></script>
    <script>
        $(function(){
            TagNav('#tagnav',{
                type: 'scrollToFirst',
            });
            $('.weui_tab').tab({
                defaultIndex: 2,
                activeClass:'weui_bar_item_on',
                onToggle:function(index){
//                    if(index>0){
//                        alert(index)
//                    }
                }
            });
        });

    </script>
@endsection

@section('container')

    <div class="slider">
        @for($i = 0; $i<=4; $i++)
            <a href="" class="slide">
                <img src="{{asset('image/Belgrade-Waterfront-Tom-Fox-2433.jpg')}}">
            </a>
        @endfor
    </div>
    <div class="cases">
        <div class="cases-type">

            <div id="tagnav" class="weui-navigator weui-navigator-wrapper">
                <ul class="weui-navigator-list">
                    <li><a href="javascript:;">全部</a></li>
                    <li><a href="javascript:;">山水</a></li>
                    <li><a href="javascript:;">植物</a></li>
                    <li><a href="javascript:;">盆景</a></li>
                    <li><a href="javascript:;">制品</a></li>
                    <li><a href="javascript:;">雕塑</a></li>
                    <li><a href="javascript:;">鱼乐</a></li>
                    <li><a href="javascript:;">其它</a></li>
                </ul>
            </div>
        </div>

        <style>


        </style>
        <div class="cases-content">
            @for($i = 1; $i <= 5; $i++)
                <div class="cases-item">
                    <a href="{{route('m.cases.show', $i)}}">
                        <img src="{{asset('image/Belgrade-Waterfront-Tom-Fox-2433.jpg')}}"/>
                        <p>测试标题</p>

                        <div class="detail-box">
                            <div class="detail-la clear">
                                <img src="{{asset('image/20170307103982648264.jpg')}}"/>大胡子•潘
                            </div>
                            <div class="detail-content">
                                <img class="eye" src="{{asset('image/eye_white.png')}}"/>158&nbsp;&nbsp;<img class="praise" src="{{asset('image/praise_white.png')}}"/>158&nbsp;&nbsp;<img class="comment" src="{{asset('image/comment_white.png')}}"/>158
                            </div>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
@endsection


@section('footer')
    {{--@include('m.layout.footer')--}}
@endsection