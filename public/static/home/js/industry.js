
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
 * 搜索
 */
$('#serached').click(function(){
    var keyword =  $.trim($('#keyword').val());
    var urls  = $(this).attr('data-url');
    if(keyword == '' || keyword== undefined || keyword =='undefined'){
        layer.msg('请输入需要搜索的标题');
        return false;
    }

    window.location.href = urls+'?keyword='+keyword;
})

