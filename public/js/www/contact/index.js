$(function(){
    var on = false;
//        setInterval(function(){
    var boxTitle = $('.box-title span');
    initSpan(boxTitle, 0, boxTitle.length, 'show');

    setInterval(function(){
        initSpan(boxTitle, 0, boxTitle.length);
    }, boxTitle.length * 40 + 1000);

    function initSpan(document, index, max, type){
//            if(on){
//                setTimeout(function(){
//                    initSpan(document, index, max);
//                }, 1000)
//            }

        if(type == 'show'){
            setTimeout(function(){
                if(type == 'hide'){
                    document.eq(index).removeClass('on');
                }else{
                    document.eq(index).addClass('on');
                }

                if(index >= max){
                    setTimeout(function(){
                        initSpan(document, 0, max, 'hide');
                    },200)
                    return false;
                }

                initSpan(document, ++index, max, 'show');
            }, 40);
        }else{
            setTimeout(function(){
                if(type == 'hide'){
                    document.eq(index).removeClass('on');
                }else{
                    document.eq(index).addClass('on');
                }

                if(index >= max){
                    setTimeout(function(){
                        initSpan(document, 0, max, 'hide');
                    },200)
                    return false;
                }

                initSpan(document, ++index, max, 'show');
            }, 40);
        }
    }
//        }, 5000)
});