$(function(){
    //function supportCss3(style) {
    //    var prefix = ['webkit', 'Moz', 'ms', 'o'],
    //        i,
    //        humpString = [],
    //        htmlStyle = document.documentElement.style,
    //        _toHumb = function (string) {
    //            return string.replace(/-(\w)/g, function ($0, $1) {
    //                return $1.toUpperCase();
    //            });
    //        };
    //
    //    for (i in prefix)
    //        humpString.push(_toHumb(prefix[i] + '-' + style));
    //
    //    humpString.push(_toHumb(style));
    //
    //    for (i in humpString)
    //        if (humpString[i] in htmlStyle) return true;
    //
    //    return false;
    //}
    //supportCss3('animation-play-state');

    var app = $('.app');
    $('.nav-bar').click(function(){
        if(app.hasClass('open')){
            app.removeClass('open');
        }else{
            app.addClass('open');
        }
    });

    var nowUrl = window.location.hash.substring(3);
    handle(nowUrl);

    $(document).on('click', '[slug]', function(){
        var src = $(this).attr('slug');

        console.log(src);
        if(src == window.location.hash.substring(3)) return false;

        if(src){
            handle(src);
        }
    });

    function handle(url){
        if(url == '') url = 'home';

        var buttonBase = $('[slug=' + url + ']');
        if(buttonBase.length > 0){
            buttonBase.addClass('on').siblings().removeClass('on');
        }

        $.pjax({
            url: url,
            container: '.main',
            cache: false,
            setRequestUrl: '#!/' + url,
            push:true,
            replace:false
        });
        nowUrl = window.location.hash.substring(3);
    }

    $(window).bind('hashchange', function() {
        var change= window.location.hash.substring(3);
        if(nowUrl == '' || change == nowUrl)
            return false;

        nowUrl = change;

        handle(window.location.hash.substring(3));
    });
});