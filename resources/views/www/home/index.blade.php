<style>
    @font-face{font-family:futura-pt;src:url(https://use.typekit.net/af/90cf9f/000000000000000000010091/27/l?subset_id=2&fvd=n7&v=3) format("woff2"),url(https://use.typekit.net/af/90cf9f/000000000000000000010091/27/d?subset_id=2&fvd=n7&v=3) format("woff"),url(https://use.typekit.net/af/90cf9f/000000000000000000010091/27/a?subset_id=2&fvd=n7&v=3) format("opentype");font-weight:700;font-style:normal;}@font-face{font-family:futura-pt;src:url(https://use.typekit.net/af/8a5494/000000000000000000013365/27/l?subset_id=2&fvd=n4&v=3) format("woff2"),url(https://use.typekit.net/af/8a5494/000000000000000000013365/27/d?subset_id=2&fvd=n4&v=3) format("woff"),url(https://use.typekit.net/af/8a5494/000000000000000000013365/27/a?subset_id=2&fvd=n4&v=3) format("opentype");font-weight:400;font-style:normal;}
    .home_box{
        width: 100%;
        vertical-align: middle;
        z-index: 999;
        height: 100%;
        padding: 240px 0 0;
        overflow: hidden;
        position: relative;
    }
    @media screen and (max-width: 1024px){
        .home_box{
            padding: 240px 10% 0;
        }
    }
    .home_title{
        color: #FFF;
        line-height: 0.8;
        /*font-size: 3.4375em;*/
        font-size: 55px;
        /*margin: 0 0 3em;*/
        letter-spacing: 0;
        opacity: 0;
        width: 931px;
        -moz-transform: translate3d(0, -30%, 0);
        -ms-transform: translate3d(0, -30%, 0);
        -webkit-transform: translate3d(0, -30%, 0);
        transform: translate3d(0, -30%, 0);
        font-family: "futura-pt",sans-serif;
        font-weight: bold;
        font-style: normal;
        text-rendering: optimizeLegibility;
        text-align: center;
        text-transform: uppercase;
        position: absolute;
        top: 50%;
        margin-top: -180px;
        left: 50%;
        margin-left: -465px;
    }
    @media screen and (max-width: 1024px){
        .home_title{
            font-size: 30px!important;
            width: 700px;
            margin-left: -350px;
        }
    }
    @media screen and (max-width: 767px){
        .home_title{
            font-size: 20px!important;
            width: 400px;
            margin-left: -200px;
        }
    }
    .home_box .clock {
        display: none;
        position: absolute;
        left: 50%;
        margin-left: -50px;
        top: 50%;
        margin-top: -100px;
        position: relative;
        width: 100px;
        height: 100px;
        border: 2px solid #FFF;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .home_box .clock .hour, .home_box .clock .minute, .home_box .clock .seconds, .home_box .clock .center {
        position: absolute;
        width: 2px;
        left: 50%;
        top: 50%;
        margin-left: -1px;
        background-color: #FFF;
        -webkit-transform-origin: center bottom;
        -moz-transform-origin: center bottom;
        -ms-transform-origin: center bottom;
        -o-transform-origin: center bottom;
        transform-origin: center bottom;
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    .home_box .clock .hour {
        height: 20px;
        margin-top: -20px;
        width: 3px;
    }
    .home_box .clock .minute {
        height: 34px;
        margin-top: -34px;
    }
    .home_box .clock .seconds {
        height: 45px;
        margin-top: -45px;
        width: 1px;
    }
    .home_box .clock .center {
        width: 8px;
        height: 8px;
        margin-left: -4px;
        margin-top: -4px;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }
    .home_box .clock .city{
        position: absolute;
        bottom: -35px;
        left: 0;
        width: 100px;
        color: white;
        text-align: center;
    }
    .home_box .clock .date{
        position: absolute;
        bottom: -60px;
        width: 150px;
        left: -25px;
        text-align: center;
        color: white;
    }
</style>
<script>
    $(function(){
        var house = {!! date('H') !!};
        var minute = {!! date('i') !!};
        var seconds = {!! date('s') !!};
        function initClock(){
            if(seconds == 59){
                seconds = 0;
                if(minute == 59){
                    house++;
                    minute = 0;
                }else{
                    minute++;
                }
            }else{
                seconds++;
            }
            $('.clock .hour').css('transform', 'rotate(' + (house * 30) + 'deg)');
            $('.clock .minute').css('transform', 'rotate(' + (minute * 6) + 'deg)');
            $('.clock .seconds').css('transform', 'rotate(' + (seconds * 6) + 'deg)');
            $('.home_box .clock').show();
        }
        var clockInter = setInterval(function(){
            initClock();
        }, 1000);


        $(window).resize(function () {          //当浏览器大小变化时
            initMedia();
        });

        function initMedia(){
            var videoHeight = $('.media').height();
            var videoWidth = videoHeight*1.777;
            var mediaWidth = $('.media').width();
            $('.splash video').height(videoHeight).width(videoWidth).css({marginLeft:(mediaWidth - videoWidth) / 2 + 'px'})
        }
        initMedia();
    })
</script>
<div class="home_box">
    <h1 class="home_title" style="opacity: 1; transform: translate(0px, 0px);">Creativity Starts With Viewing The World Differently.</h1>
    <div class="clock">
        <div class="hour"></div>
        <div class="minute"></div>
        <div class="seconds"></div>
        <div class="center"></div>
        <div class="city">北京时间</div>
        <div class="date">{{date('Y年 m月 d日')}}</div>
    </div>
    <style>
        .media{
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
        }
        .splash{
            position: relative;
            width: 100%;
            height: 100%;
        }
        .splash-overlay-black{
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0.6;
            background-color: #000000;
            top: 0;
            left: 0;
        }
    </style>
    <div class="media">
        <div class="splash">
            {{--<video type="video/webm" autoplay="" src="/video/2016trim.webm" style="opacity: 1; margin-top: 0px; margin-left: -3240px;" height="935" width="1662"></video>--}}
            <video muted="true" loop="loop" type="video/webm" autoplay="" src="/video/2016trim.webm" style="opacity: 1; margin-top: 0px;"></video>
            <div class="splash-overlay-black" ></div>
        </div>
    </div>
</div>