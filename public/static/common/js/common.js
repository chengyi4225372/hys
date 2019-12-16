var index_module = (function (){
    //退出登录
    var user_logout = function user_logout(objthis){
        var url = $(objthis).attr('data-url');
        var url2 = $(objthis).attr('location_url');
        $.post(
            url,
            '',
            function (ret){
                if(ret.status == true){
                    layer.msg(ret.message,{icon:1,time:1000},function (){
                        location.href = url2;
                    });
                }else{
                    layer.msg(ret.message,{icon:2,time:1500});
                }

            },'json'
        );
    };
    return {
        user_logout:user_logout,
    }
})();

$(function(){
    $('.bgHot ul li').click(function () {
        $(this).addClass('chosen')
        $(this).children().css({ 'display': 'block' });
    })
    $('.close').click(function(e){
        e.stopPropagation()
        $(this).css({'display': 'none'})
        $(this).parent().removeClass('chosen')
    })
    $('.bgHot ul li').mouseenter(function(){
        if($(this).hasClass('chosen')){
            return false
        }
        $(this).css({
            'background':'#FBE1DC',
            'color':'#F75236'
        })
    }).mouseleave(function(){
        $(this).css({
            'background':'#F6F6F6',
            'color':'#333'
        })
    })
})
