var _isin = false;
$(document).ready(function(){
    var plus = $('.plus');
    /* 点击添加按钮块js*/
    $(".plus-btn").click(function(){
        if(_isin){

            var text = $.trim($('#textEdit').innerText());
            if(!text)return;
            plus.append('<dd><em>句'+(($('.plus>dd').length)+1)+'</em><span>'+text+'</span></dd>').scrollTop( plus[0].scrollHeight);
            $('#textEdit').innerText('');
        }
    });
    /* 点击选中块js*/
    $(".steps-content dl dd").click(function(){
        $(".steps-content dl dd").removeClass('active-txt');
        $(this).addClass('active-txt')
    });
});