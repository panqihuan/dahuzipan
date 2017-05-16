
<script>
    $(function(){
        $('.main_bar_ul li').click(function(){
            $(this).addClass('on').siblings().removeClass('on');
        });
    })
</script>
<style>
    .main_bar{
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 180px;
        background-color: #EAEDF1;
    }
    .main_bar .main_bar_title{
        text-align: center;
        background-color: #D9DEE4;
        height: 60px;
        line-height: 60px;
        letter-spacing: 3px;
        font-size: 18px;
        font-weight: bold;
    }
    .main_bar .main_bar_ul{
    }
    .main_bar .main_bar_li{
        height: 50px;
        line-height: 50px;
        padding-left: 30px;
    }
    .main_bar .main_bar_li:hover{
        background-color: rgb(244,246,248);
    }
    .main_bar .main_bar_li.on{
        background-color: white;
    }

    .main_box{
        position: absolute;
        top: 0;
        right: 0;
        width: calc(100% - 180px);
    }
</style>
<div class="main_bar">
    <div class="main_bar_title">公告中心</div>
    <ul class="main_bar_ul">
        <li class="main_bar_li {{$type == 'all' ? 'on' : ''}}" main_slug="news?type=all">全部</li>
        <li class="main_bar_li {{$type == 'system' ? 'on' : ''}}" main_slug="news?type=system">系统公告</li>
        <li class="main_bar_li {{$type == 'update' ? 'on' : ''}}" main_slug="news?type=update">更新公告</li>
        @if(Auth::user()->isAdmin())
            <li class="main_bar_li {{$type == 'news/create' ? 'on' : ''}}" main_slug="news/create">添加公告</li>
        @endif
    </ul>
</div>