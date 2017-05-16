@extends('m.layout.master')

@section('title', '首页')

@section('meta')
    <script type="text/javascript" src="{{asset('js/m/plugins.js')}}"></script>
{{--    <script type="text/javascript" src="{{asset('js/m/jquery-1.9.1.min.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('js/m/jquery.bxslider.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/general/jquery.bxslider.css?'.rand())}}">
    <script type="text/javascript" src="{{asset('js/m/home/index.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/m/general/slider.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/cases/list.css?'.rand())}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/home/cases_list.css?'.rand())}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/home/index.css?'.rand())}}">
@endsection

@section('container')
    <div class="home-img">
        <img src="{{asset('image/Landing-Page-03.jpg')}}"/>
        <div class="home-img-introduce">
            {{--<h1>--}}
                {{--SWA is a world design leader in landscape architecture, planning and urban design. Our projects have garnered over 800 awards. Our creative studios are committed to design that results in beauty, sustainability and social well-being. Welcome.--}}
            {{--</h1>--}}
            <h1>
                大胡子是世界领袖在景观建筑设计,规划和城市设计。我们的项目已经获得了超过800个奖项。我们的创意工作室致力于设计结果在美丽,可持续性和社会福祉。受欢迎的。
            </h1>
        </div>
    </div>

    <div class="slider">
        <a href="" class="slide">
            <img src="{{asset('image/Belgrade-Waterfront-Tom-Fox-2433.jpg')}}">
        </a>
        <a class="slide">
            <img src="{{asset('image/Belgrade-Waterfront-Tom-Fox-2433.jpg')}}">
        </a>
        <a class="slide">
            <img src="{{asset('image/Belgrade-Waterfront-Tom-Fox-2433.jpg')}}">
        </a>
        <a class="slide">
            <img src="{{asset('image/Belgrade-Waterfront-Tom-Fox-2433.jpg')}}">
        </a>
    </div>

    <div class="news">
        <h2 class="news-title">新闻
            <a>
                <img src="{{asset('image/more.png')}}">
            </a>
        </h2>
        <div class="news-box">
            @for($i = 1; $i <= 3; $i++)
                <a href="{{route('m.news.show', $i)}}" class="news-item">
                    <div class="item-img">
                        <img src="{{asset('image/admin/4.png')}}">
                    </div>
                    <div class="item-content">
                        <p class="title">测试</p>
                        <div class="content">的顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶</div>
                    </div>
                </a>
            @endfor
        </div>
    </div>
    <div class="cases">
        <div class="cases-title">Landscape Architect or Designer<br/>景观设计师或设计师</div>
        <div class="cases-color">
            <h2>关键问题</h2>
        </div>
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