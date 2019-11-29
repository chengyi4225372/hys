/**
 * 添加
 */
$('#addcates').click(function(){
   var urls = $(this).attr('data-url');
   layer.open({
       type: 2,
       title: '添加产品',
       shadeClose: true,
       shade: 0.8,
       area: ['30%', '50%'],
       content: urls, //iframe的url
   });
});

/**
 * 添加逻辑
 */
$('.add_cates').click(function(){
    var title =  $.trim($('#title').val());
    var urls  =  $(this).attr('data-url');

    if(title ==''|| title ==undefined || title == 'undefined'){
        layer.msg('请输入标题名');
        return false;
    }

    $.post(urls,{'title':title},function(ret){
         if(ret.code == 200){
             layer.msg(ret.msg,{icon:6},function(){
                parent.location.reload();
             });
         }

        if(ret.code == 400){
            layer.msg(ret.msg,{icon:5},function(){
                parent.location.reload();
            });
        }

    },'json');
});

