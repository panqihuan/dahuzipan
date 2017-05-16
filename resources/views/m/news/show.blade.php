@extends('m.layout.master')

@section('title', '首页')

@section('meta')
    <script type="text/javascript" src="{{asset('js/m/plugins.js')}}"></script>
    {{--    <script type="text/javascript" src="{{asset('js/m/jquery-1.9.1.min.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('js/m/jquery.bxslider.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/general/jquery.bxslider.css?'.rand())}}">
@endsection

@section('container')
    <div class="content"></div>
@endsection


@section('footer')
    {{--@include('m.layout.footer')--}}
@endsection