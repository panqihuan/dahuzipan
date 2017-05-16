$(function(){
    var cellphone = $('input[name=cellphone]');
    var qq = $('input[name=qq]');

    $('form.input').blur(function(){
        checkValue($(this));
    });

    function checkValue(input){
        if(input.hasClass('cellphone') && !checkCellphone()) return false;

        if(input.hasClass('qq') && !checkQq()) return false;

        return true;
    }

    function checkCellphone(){
        if(cellphone.val()!='' && /^1[34578][0-9]{9}$/.test(cellphone.val())){
            console.log('手机号正确');
            return true;
        }else{
            console.log('手机号错误');
            return false;
        }
    }

    function checkQq(){
        if(qq.val()!='' && /^[1-9]\d{4,9}$/.test(qq.val())){
            console.log('QQ号正确');
            return true;
        }else{
            console.log('QQ错误');
            return false;
        }
    }

    $('button[type=submit]').click(function(){
        if(!checkCellphone() || checkQq()) return false;

        $('form').submit();
    });

});