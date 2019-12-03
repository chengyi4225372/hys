
/* 选择热词 */
$('.hotWord ul li').click(function (e) {
    if ($(this).hasClass('chosen')) {
        $(this).removeClass('chosen')
    } else {
        $(this).addClass('chosen')
        $(this).siblings().removeClass('chosen')
    }
})




/**
*热门搜索
 * */
function hotsearch(obj){
   var title = $(obj).attr('data-title');
   var urls  = $(obj).attr('data-url');
   if(title == '' || title ==undefined || title == 'undefined'){
       return false;
   }
   window.location.href = urls+'?title='+title;
}

/**
 * 搜索t
 */
$(function(){
    $('#searched').click(function(){
        var keyword =  $.trim($('#keyword').val());
        var urls  = $(this).attr('data-url');
        console.log(keyword);
        if(keyword == '' || keyword== undefined || keyword =='undefined'){
            layer.msg('请输入需要搜索的标题');
            return false;
        }
        window.location.href = urls+'?keyword='+keyword;
    });
});



