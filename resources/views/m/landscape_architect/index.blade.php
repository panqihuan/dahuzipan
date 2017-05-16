@extends('m.layout.master')

@section('title', '景观设计师')

@section('meta')
    <script type="text/javascript" src="{{asset('js/m/general/slider.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/cases/list.css?'.rand())}}">
@endsection

@section('container')

    <style>
        .la-content{
            padding: 0px 20px 20px !important;
        }
        .title_h1 {
            color: #e5e5e5;
            display: inline-block;
            font-family: 'HelvNeue-Roman', Helvetica, Arial, sans-serif;
            font-size: 34px;
            letter-spacing: 1px;
            line-height: 1;
            margin-bottom: 10px;
            padding: 0;
            margin-top: 5px;
        }
        .title_h3{
            color: #ff6c2f;
            font-family: 'HelvNeue-Roman', Helvetica, sans-serif;
            font-size: 18px;
            font-weight: 300;
            margin: 8px 0;
            text-transform: uppercase;
        }
        .util-item{
            padding: 10px 10px 30px 10px;
        }
        .util-item div{
            background-color: #fff;
            border: 1px solid #bfbfbf;
            float: left;
            padding: 3px 5px 2px;
            text-align: center;
            margin-left: 0;
            margin-right: 6px;
            width: calc(30% - 3px);
        }
        .util-item a{
            color: #000;
            font-family: 'HelvNeue-Roman', Helvetica, sans-serif;
            font-size: 16px;
            font-weight: bold;
            line-height: 1.7;
            text-decoration: underline;
        }
        .la-content .la-item{
            padding: 20px 0 20px 0;
        }
        .la-content .la-item .Subhead2{
            color: #525252;
            font-family: 'HelvNeue-Bold', Helvetica, sans-serif;
            font-weight: 600;
            font-size: 15px;
        }
        .la-content .la-item .Subhead2 a{
            color: #2d426a !important;
            font-family: 'HelvNeue-Bold', Helvetica, sans-serif !important;
            font-size: 15px !important;
            font-weight: 600 !important;
            text-decoration: underline !important;
        }
        .la-content .la-item img{
            width: 120px;
            height: 120px;
        }
        .la-content .come{
            padding: 10px 0;
        }
        .la-content .come p{
            color: rgb(255, 255, 255);
            background-color: rgb(31, 173, 239);
            text-align: center;
            padding: 20px;
            margin: 0px;
            font-size: 16px;

        }

    </style>
    <div class="util-item clear">
        <div>
            <a href="">联系工作</a>
        </div>
        <div>
            <a href="">团队入驻</a>
        </div>
        <div>
            <a href="">工程咨询</a>
        </div>
    </div>
    <div class="la-content">
        <h1 class="title_h1">About</h1>
        <h3 class="title_h3">欢迎来到嘉兴景观设计师协会</h3>
        <div class="la-item">
            <span class="Subhead2"><a href="{{route('m.la.show', 1)}}">大胡子•潘</a>, 嘉兴景观设计师协会荣誉会长,<a href="">嘉兴景观设计师协会 (ASLA)</a> 常务副主席、首席执行官</span>
            <br>
            <br>
            <a href="{{route('m.la.show', 1)}}">
                <img alt="" data-ektron-style="white-space: pre-wrap; float: left; margin-right: 5px; padding: 3px !important;" src="{{asset('image/20170307103982648264.jpg')}}" style="white-space: pre-wrap; float: left; margin-right: 5px; padding: 3px !important;">
            </a>
            <span class="BodyText">感谢您访问我们的网站。 嘉兴景观设计师协会 (ASLA) 于 2016 年由杰出的嘉兴景观设计师所开创成立, 与火星有着深厚的历史渊源。 自我们首位火星会员于 21 世纪早期加入协会起, 迄今我们已经拥有超过 110 位的火星会员。 在过去的 1 年里, 嘉兴的景观设计师已经获得了 17 项富有盛誉的火星景观设计师协会专业奖项, 其中包括 2 项杰出大奖, 以及来自火星顶尖高校的 4个学生团队所获得的学生奖项。 日渐涌现的跨星球实践意味着地火景观设计师在中美项目中更加频繁地合作。 <br></span>
        </div>

        <div class="come">
            <p>我们期待您加入嘉兴景观设计师协会</p>
        </div>

        <div class="la-item">
            <span class="Subhead2">大胡子•潘, 嘉兴景观设计师协会荣誉会长,<a href=""> 嘉兴景观设计师协会 (ASLA)</a> 常务副主席、首席执行官</span>
            <br>
            <br>
            <img alt="" data-ektron-style="white-space: pre-wrap; float: left; margin-right: 5px; padding: 3px !important;" src="{{asset('image/20170307103982648264.jpg')}}" style="white-space: pre-wrap; float: left; margin-right: 5px; padding: 3px !important;">
            <span class="BodyText">感谢您访问我们的网站。 嘉兴景观设计师协会 (ASLA) 于 2016 年由杰出的嘉兴景观设计师所开创成立, 与火星有着深厚的历史渊源。 自我们首位火星会员于 21 世纪早期加入协会起, 迄今我们已经拥有超过 110 位的火星会员。 在过去的 1 年里, 嘉兴的景观设计师已经获得了 17 项富有盛誉的火星景观设计师协会专业奖项, 其中包括 2 项杰出大奖, 以及来自火星顶尖高校的 4个学生团队所获得的学生奖项。 日渐涌现的跨星球实践意味着地火景观设计师在中美项目中更加频繁地合作。 <br></span>
        </div>

        <div class="uk-width-small-1-1" style="margin: 10px 0px;">
            <p style="margin: 15px 0px;"><b><span class="Subhead2">资源导航</span></b> &nbsp;</p>
            <div class="uk-width-small-1-1" style="margin-bottom: 15px;">
                <a style="text-decoration: none;" href="/ContentDetail.aspx?id=24076">
                    <div style="padding: 10px; background-color: rgb(229, 236, 133);">
                        <div style="font-family: Arial, Helvetica, sans-serif; color: rgb(68, 68, 68);">绿色基础设施</div>
                    </div>
                </a>
            </div>
            <div class="uk-width-small-1-1" style="margin-bottom: 15px;">
                <a style="text-decoration: none;" href="/ContentDetail.aspx?id=23888">
                    <div style="padding: 10px; background-color: rgb(0, 85, 139);">
                        <div style="font-family: Arial, Helvetica, sans-serif; color: rgb(255, 255, 255);">宜居社区</div>
                    </div>
                </a>
            </div>
            <div class="uk-width-small-1-1" style="margin-bottom: 15px;"><a style="text-decoration: none;" href="/ContentDetail.aspx?id=23430"><div style="padding: 10px; background-color: rgb(214, 214, 214);"><div style="font-family: Arial, Helvetica, sans-serif; color: rgb(68, 68, 68);">可持续交通系统</div>
                    </div>
                </a></div>
            <div class="uk-width-small-1-1" style="margin-bottom: 15px;"><a style="text-decoration: none;" href="/ContentDetail.aspx?id=23720"><div style="padding: 10px; background-color: rgb(110, 151, 49);"><div style="font-family: Arial, Helvetica, sans-serif; color: rgb(255, 255, 255);">可持续城市发展</div>
                    </div>
                </a></div>
            <div class="uk-width-small-1-1" style="margin-bottom: 15px;"><a style="text-decoration: none;" href="/ContentDetail.aspx?id=21910"><div style="padding: 10px; background-color: rgb(85, 75, 63);"><div style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: rgb(255, 255, 255);">气候变化</div>
                    </div>
                </a></div>
            <p style="margin: 15px 0px;"><b><span class="Subhead2">住宅设计</span></b> &nbsp;</p>
            <div class="uk-width-small-1-1" style="margin-bottom: 15px;"><a style="text-decoration: none;" href="/ContentDetail.aspx?id=24988"><div style="padding: 10px; background-color: rgb(243, 100, 40);"><div style="font-family: Arial, Helvetica, sans-serif; color: rgb(255, 255, 255);">水资源效率的提升</div>
                    </div>
                </a></div>
            <div class="uk-width-small-1-1" style="margin-bottom: 15px;"><a style="text-decoration: none;" href="/ContentDetail.aspx?id=24980"><div style="padding: 10px; background-color: rgb(212, 238, 251);"><div style="font-family: Arial, Helvetica, sans-serif; color: rgb(68, 68, 68);">能源效率的提高</div>
                    </div>
                </a></div>
            <div class="uk-width-small-1-1" style="margin-bottom: 15px;"><a style="text-decoration: none;" href="/ContentDetail.aspx?id=24990"><div style="padding: 10px; background-color: rgb(101, 101, 101);"><div style="font-family: Arial, Helvetica, sans-serif; color: rgb(255, 255, 255);">植被效益的最大化</div>
                    </div>
                </a></div>
            <div class="uk-width-small-1-1" style="margin-bottom: 15px;"><a style="text-decoration: none;" href="/ContentDetail.aspx?id=25156"><div style="padding: 10px; background-color: rgb(105, 74, 133);"><div style="font-family: Arial, Helvetica, sans-serif; color: rgb(255, 255, 255);">低干扰材料的应用</div>
                    </div>
                </a></div>
            <p style="margin: 15px 0px;"><b><span class="Subhead2">可持续工具包</span></b> &nbsp;</p>
            <div class="uk-width-small-1-1" style="margin-bottom: 15px;"><a style="text-decoration: none;" href="/WorkArea/linkit.aspx?LinkIdentifier=id&amp;ItemID=26992" title="Sustainability Toolkit: Economic Models"><div style="padding: 10px; background-color: rgb(0, 192, 239);"><div style="font-family: Arial, Helvetica, sans-serif; color: rgb(255, 255, 255);">经济模型</div>
                    </div>
                </a></div>
            <div class="uk-width-small-1-1" style="margin-bottom: 15px;"><a style="text-decoration: none;" href="/WorkArea/linkit.aspx?LinkIdentifier=id&amp;ItemID=26060" title="Sustainability Toolkit: Environmental Models"><div style="padding: 10px; background-color: rgb(244, 50, 124);"><div style="font-family: Arial, Helvetica, sans-serif; color: rgb(255, 255, 255);">环境模型</div>
                    </div>
                </a></div>
            <div class="uk-width-small-1-1" style="margin-bottom: 15px;"><a style="text-decoration: none;" href="/WorkArea/linkit.aspx?LinkIdentifier=id&amp;ItemID=28296" title="Sustainability Toolkit: Social Models"><div style="padding: 10px; background-color: rgb(21, 215, 41);"><div style="font-family: Arial, Helvetica, sans-serif; color: rgb(255, 255, 255);">社会模型</div>
                    </div>
                </a></div>
        </div>
        <style>
            .uk-width-small-1-1 a{
                font-size: 16px;
            }
        </style>
    </div>

@endsection


@section('footer')
    {{--@include('m.layout.footer')--}}
@endsection