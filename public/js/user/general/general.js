$(function(){

    //  设置当前url
    var nowUrl = '';

    //  url开始位置
    var urlIndex = -1;

    //  ?所在位置
    var parameterIndex = -1;

    //  ?所在最后位置
    var parameterLaster = -1;

    //  根据?所在位置获得url参数
    var parameter = '';

    //  获取访问地址
    var url = '';

    function initUrl(){
        //  初始化访问url

        //  url开始位置
        urlIndex = window.location.hash.lastIndexOf('!/');

        //  ?所在位置
        parameterIndex = window.location.hash.indexOf('?');

        //  ?所在位置
        var parameterLaster = window.location.hash.lastIndexOf('?');

        //  根据?所在位置获得url参数
        parameter = window.location.hash.substring(parameterLaster + 1);
        if(parameterIndex == -1){
            parameter = '';
        }

        if(parameterIndex < urlIndex){
            parameterIndex = window.location.hash.length
        }

        //  获取访问地址
        url = window.location.hash.substring(urlIndex + 2, parameterIndex);
    }
    initUrl();


    //console.log(window.location.hash);
    //console.log(urlIndex);
    //console.log(parameterIndex);
    //console.log(parameterLaster);
    //console.log(parameter);
    //console.log(url);
    //return false;

    handle(url, parameter);

    $(document).on('click', '[slug]', function(){
        var src = $(this).attr('slug');

        //  如果连接地址和url地址相同, 不执行加载
        if(src == window.location.hash.substring(3)) return false;

        var parameterIndex = src.indexOf('?');
        var parameter = src.substring(parameterIndex);
        if(parameterIndex == -1){
            parameter = '';
        }
        var url = src.substring(3, parameterIndex);
        if(url){
            handle(url, parameter);
        }
    });
    $(document).on('click', '[main_slug]', function(){
        var src = $(this).attr('main_slug');

        //  如果连接地址和url地址相同, 不执行加载
        if(src == window.location.hash.substring(3)) return false;

        var parameterIndex = src.indexOf('?');
        var parameter = src.substring(parameterIndex + 1);
        var url = '';
        if(parameterIndex == -1){
            parameter = '';
            url = src;
        }else{
            url = src.substring(0, parameterIndex);
        }
        //console.log(urlIndex);
        //console.log(parameterIndex);
        //console.log(parameterLaster);
        //console.log(parameter);
        //console.log(url);
        //return false;
        console.log(parameterIndex);
        console.log(src);
        console.log(url);
        if(url){
            handle(url, parameter, '.main_box', 2);
        }
    });
    $(document).on('click', '.main_box a', function(){
        var src = $(this).attr('href');

        //  如果连接地址和url地址相同, 不执行加载
        if(src == window.location.hash.substring(3)) return false;

        var parameterIndex = src.indexOf('?');
        var parameter = src.substring(parameterIndex + 1);
        if(parameterIndex == -1){
            parameter = '';
        }
        var url = src.substring(0, parameterIndex);
        //console.log(urlIndex);
        //console.log(parameterIndex);
        //console.log(parameterLaster);
        //console.log(parameter);
        //console.log(url);
        //return false;
        if(url){
            handle(url, parameter, '.main_box', 2);
        }
        return false;
    });

    //  pjax加载方法
    function handle(url, parameter, className, level){
        //  如果url为空, 默认加载新闻公告
        if(url == '') url = 'news';
        if(!className) className='.all_main';
        if(!level) level='1';

        //return false;
        if(parameter){
            parameter = "?" + parameter;
        }

        $.pjax({
            url: url + parameter,
            container: className,
            cache: false,
            setRequestUrl: '#!/' + url + parameter,
            push:true,
            replace:false,
            data:{level:level}
        });
        nowUrl = url + parameter;
        $("[slug='" + nowUrl + "']").addClass('on');
        $("[main_slug='" + nowUrl + "']").addClass('on');
    }

    $(window).bind('hashchange', function() {
        var change= window.location.hash.substring(3);
        if(change == nowUrl)
            return false;

        nowUrl = change;

        initUrl();

        handle(url, parameter);
    });
});