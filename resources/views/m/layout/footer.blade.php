<div class="footer clear">
    <ul>
        <li class="home {{$route=='m.home'?'active':''}}">
            <a href="{{$route=='m.home'?'javascript:void(0);':route('m.home')}}">
                <div></div>
                <span>首页</span>
            </a>
        </li>
        <li class="discovery">
            <div></div>
            <span>发现</span>
        </li>

        <li class="message {{strpos($route, 'm.message') !== false?'active':''}}">
            <a href="{{strpos($route, 'm.message') !== false?'javascript:void(0);':route('m.message.index')}}">
                <div></div>
                <span>消息</span>
            </a>
        </li>
        <li class="my {{$route=='m.my.index'?'active':''}}">
            <a href="{{$route=='m.my.index'?'javascript:void(0);':route('m.my.index')}}">
                <div></div>
                <span>我的</span>
            </a>
        </li>
    </ul>
</div>