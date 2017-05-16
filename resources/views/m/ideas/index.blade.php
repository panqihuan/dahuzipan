@extends('m.layout.master')

@section('title', '想法')

@section('meta')
    <link rel="stylesheet" type="text/css" href="{{asset('css/m/cases/list.css?'.rand())}}">
@endsection

@section('container')

    <style>
        .ideas-box{
            padding: 0 15px;
        }
        .ideas-box p{
            margin: 0 0 15px;
        }
    </style>
    <div class="ideas-box">
        <div class="cf">
            <p>Experiment. Create. Innovate. Collaborate. Share.</p>
            <p>Our work is fueled by knowledge, research, and active debate. We advocate new ideas and innovation in design theory and practice. SWA’s identity is founded on research, experimentation, and risk-taking. Browse our online laboratory of ideas, people, and projects.</p>
        </div>
    </div>

@endsection


@section('footer')
    {{--@include('m.layout.footer')--}}
@endsection