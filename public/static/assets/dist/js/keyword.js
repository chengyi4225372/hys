
/**
 * 添加弹窗
 */
$('#addkeys').click(function(){
    var urls = $(this).attr('data-url');
    layer.open({
        type: 2,
        title: '添加',
        shadeClose: true,
        shade: 0.8,
        area: ['40%', '50%'],
        content: urls, //iframe的url
    });
})

/**
*添加提交
*/
$('.add_keys').click(function(){
    var urls  = $(this).attr('data-url');
    var title = $.trim($('#title').val());
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

/**
 * 编辑弹窗
 */
function editlayer(urls,id){
    if(urls == '' || urls == undefined){
        return false;
    }

    if(id <=0 || id == '' || id==undefined){
        return false;
    }

   var hrefs = urls +'?mid='+id;

   layer.open({
       type: 2,
       title: '编辑',
       shadeClose: true,
       shade: 0.8,
       area: ['40%', '50%'],
       content: hrefs, //iframe的url
   })

}


/***
 * 删除提交
 */
$('.edit_keys').click(function(){
   var title = $('#title').val();
   var mid   = $('#mid').val();
   var urls  = $(this).attr('data-url');
   if(title == '' || title == undefined){
       layer.msg('请输入关键字标题');
       return false;
   }

   $.post(urls,{'title':title,'mid':mid},function(ret){
           if(ret.code == 200){
               layer.msg(ret.msg,{icon:6},function(){
                   parent.location.reload();
               });
           }

       if(ret.code ==400){
           layer.msg(ret.msg,{icon:5},function(){
               parent.location.reload();
           });
       }
   },'json');
})


/**
* 删除
*/
function delkeys(urls,id){
    layer.confirm('您确定要删除？', {
        btn: ['是的','点错了'] //按钮
    }, function(){
        $.get(urls,{'mid':id},function(ret){

            if(ret.code == 200){
                layer.msg(ret.msg,{icon:6},function(){
                    parent.location.reload();
                })
            }

            if(ret.code == 400){
                layer.msg(ret.msg,{icon:5},function(){
                    parent.location.reload();
                })
            }
        },'json');
    }, function(){
        parent.layer.closeAll();
    });

}