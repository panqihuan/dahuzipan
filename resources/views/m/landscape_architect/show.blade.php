@extends('m.layout.master')

@section('title', '景观设计师')

@section('meta')
    <script type="text/javascript" src="{{asset('js/m/home/index.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/cases/list.css?'.rand())}}">
@endsection

@section('container')

    <style>
        html, body{
            background-color: #E9E9E9!important;
        }
        .la-box .la-top{
            position: relative;
            padding-top: 61.8%;
        }
        .la-box .la-top>img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            min-height: 180px;
        }
        .la-box .la-top .portrait{
            top: 12px;
            left: 50%;
            margin-left: -36px;
            position: absolute;
            height: 72px;
            width: 72px;
            padding: 2px;
            background-color: white;
        }
        .la-box .la-top .portrait img{
            height: calc(100% - 4px);
            width: calc(100% - 4px);
            position: absolute;
        }
        .la-box .la-top .other{
            position: absolute;
            top: 90px;
            width: 100%;
        }
        .la-box .la-top .other p{
            font-weight: bold;
            color: white;
            padding: 3px;
            text-align: center;
            font-size: 14px;
        }
        .la-box .la-top .other p.nickname{
            font-size: 18px;
        }

        .la-box .la-team-idea{
            margin: 8px 8px 18px;
            border: 1px solid #c4c4c4;
            background-color: white;
            /*水平位置    垂直位置   扩散范围(越大阴影越模糊)   阴影加宽距离(按照边缘扩散指定像素)   颜色   阴影向内还是向外*/
            -moz-box-shadow: 0 4px 15px -3px #888888; /* 老的 Firefox */
            box-shadow: 0 4px 15px -3px #888888;
            border-radius: 8px;
        }
        .la-box .la-team-idea h1{
            padding: 12px;
            font-size: 18px;
            letter-spacing: 2px;
            font-weight: bold;
            text-align: center;
        }
        .la-box .la-team-idea p{
            color: green;
            text-align: center;
            padding: 0 10px 15px 10px;
        }
    </style>
    <div class="la-box">
        <div class="la-top">
            <img src="{{asset('image/team.jpg')}}"/>
            <div class="portrait">
                <img src="{{asset('image/20170307103982648264.jpg')}}"/>
            </div>
            <div class="other">
                <p class="nickname">大胡子•潘</p>
                <p>工程经验:5年　工程数量:3</p>
                <p>擅长风格:现代简约、欧式、中式</p>
            </div>
        </div>
        <div class="la-team-idea">
            <h1>团队思想</h1>
            <p>以人为本。设身处地的去为业主考虑，把想法和现实结合，才能做出最满意的设计。</p>
        </div>
        <style>
            .la-cases{
                background-color: #FCFCFC;
                border-width: 1px 0;
                border-style: solid;
                border-color: #D0D0D0;
                /*border: 1px solid #c4c4c4;*/
                -moz-box-shadow: 0 0 20px -10px #888888; /* 老的 Firefox */
                box-shadow: 0 0 20px -10px #888888;
            }
            .la-cases .cases-title h1{
                padding: 15px;
                font-size: 20px;
                letter-spacing: 5px;
                font-weight: bold;
                text-align: center;
            }


            .la-cases .cases-item-box{
            }
            .la-cases .cases-item-box .cases-item{
            }
            .la-cases .cases-item-box .cases-item a{
                display: block;
                padding-bottom: 10px;
            }
            .la-cases .cases-item-box .cases-item .item-img{
                /*width: 100%;*/
                height: 0;
                padding-top: 100%;
                position: relative;
                overflow: hidden;
                border-top: 1px solid #BBBBBB;
                border-bottom: 1px solid #E4E4E4;
            }
            .la-cases .cases-item-box .cases-item .item-img img{
                position: absolute;
                top: 2%;
                left: 2%;
                width: 96%;
                height: 96%;
            }
            .la-cases .cases-item-box .cases-item h1{
                font-size: 18px;
                font-weight: bold;
                padding: 8px 20px;
            }
            .la-cases .cases-item-box .cases-item p{
                padding: 0 20px;
            }
        </style>
        <div class="la-cases">
            <div class="cases-title">
                <h1>项目</h1>
            </div>
            <div class="cases-item-box">
                @for($i=1; $i<5; $i++)
                    <div class="cases-item">
                        <a href="{{route('m.cases.show', $i)}}">
                            <div class="item-img">
                                <img src="{{asset('image/5822fa31afbeb0.61580226.jpg')}}"/>
                            </div>
                            <h1>测试项目</h1>
                            <p>现代简约 · 平层 · 160㎡</p>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </div>

@endsection


@section('footer')
    {{--@include('m.layout.footer')--}}
@endsection