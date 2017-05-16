@extends('m.layout.master')

@section('title', '首页')

@section('meta')
    <script type="text/javascript" src="{{asset('js/m/jquery.bxslider.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/general/jquery.bxslider.css?'.rand())}}">
    <style>

    </style>
@endsection

@section('container')

@endsection


@section('footer')
    {{--@include('m.layout.footer')--}}
@endsection