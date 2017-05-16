
$(function(){
    $('.header-menu>a').click(function(){
        $('.mobile-menu').addClass('open');
        return false;
    });
    $('.mobile-mhead .close').click(function(){
        $('.mobile-menu').removeClass('open');
        return false;
    });
})