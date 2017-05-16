@extends('m.layout.master')

@section('title', '想法')

@section('meta')
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/cases/list.css?'.rand())}}">
@endsection

@section('container')

    <style>
        .contact-box{
            padding: 10px 20px 30px 20px;
        }
        .contact-box .title{
            font-size: 26px;
            font-weight: bold;
            padding-bottom: 20px;
            letter-spacing: 5px;
        }
        .contact-box .information{
            padding-bottom: 10px;
            font-size: 20px;
            color: #AAAAAA;
            font-weight: bold;
            font-family: Baskerville, "Baskerville Old Face", "Hoefler Text", Garamond, "Times New Roman", serif;
        }
        .contact-box .information-content{
            padding-bottom: 20px;
        }
        .contact-box .information-content p{
            font-family: Baskerville, "Baskerville Old Face", "Hoefler Text", Garamond, "Times New Roman", serif;
            line-height: 24px;
        }
        .go-contact{
            text-decoration: underline!important;
            letter-spacing: 2px;
        }
        .address{
            border-top: 1px solid #000;
            padding: 30px 0;
            margin: 0 20px;
            position: relative;
        }
        .address .address-content .address-title{
            font-weight: 700;
            font-size: 16px;
            padding-bottom: 15px;
        }
        .address .address-content .address-direction{
            padding-top: 5px;
            font-weight: 700;
        }
        .address .address-content .address-direction a{
            font-weight: 700;
        }
        .address .address-logo{
            position: absolute;
            top: 30px;
            right: 0;
            overflow: hidden;
            border: 2px solid rgb(35,31,32);
        }
        .address .address-logo img{
            height: 50px;
        }
    </style>
    <div class="contact-box">
        <div class="title">联系我们</div>
        <div class="information">联系信息</div>
        <div class="information-content">
            <p>
                嘉兴景观设计师协会
                <br>
                500个优美的设计案例
                <br>
                浙江省嘉兴市嘉善县乔克大厦2号楼905
                <br>
                联系电话:15067363421
                <br>
                协会座机:0573-88888888
            </p>
        </div>
        <a href="" class="go-contact">前往联系</a>
    </div>
    <div class="address">
        <div class="address-content">
            <div class="address-title">嘉兴景观设计师协会</div>
            <div class="address-route">乔克大厦2号楼905</div>
            <div class="address-route">浙江省嘉兴市嘉善县</div>
            <div class="address-direction">
                <a href="">获得路线</a>
            </div>
        </div>
        <div class="address-logo">
            <img src="{{asset('image/20170307103982648264.jpg')}}"/>
        </div>
    </div>

@endsection


@section('footer')
    {{--@include('m.layout.footer')--}}
@endsection