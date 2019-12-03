/**
 * customer
 * 后台搜索
 */
$('#btn_search_customer').click(function(){
    var keyword = $.trim($('#btn_search_customer').val());

    var url     = $(this).attr('data-url');

    if(keyword == '' || keyword == undefined || keyword =='undefined'){
        layer.msg('请输入需要搜索的文字');
        return false;
    }

   window.location.href = url+'?title='+keyword;
});

/*富文本*/
var ue = UE.getEditor('content',{initialFrameWidth:'90%',initialFrameHeight:300,charset:"utf-8"});

/**
* 添加弹窗
*/
$('#addcust').click(function(){
    var urls = $(this).attr('data-url');
    layer.open({
        type: 2,
        title: '添加',
        shadeClose: true,
        shade: 0.8,
        area: ['50%', '85%'],
        content: urls, //iframe的url
    });
});

/***
 * 添加 提交
 */
$('.add_cust').click(function(){
     var title = $.trim($('#title').val());
     var imgs  = $('#Images').val();
     var keywords  = $('#keywords').val();
     var description = $.trim($('#description').val());
     var content = ue.getContent();//取得html文本
     var urls = $(this).attr('data-url');

     if(title == '' || title == undefined){
         layer.msg('请输入文章标题');
         return false;
     }

     if(imgs == '' || imgs == undefined){
         layer.msg('请上传文章展示图');
         return false;
     }

     if(content == '' || content == undefined || content == 'undefined'){
         layer.msg('请输入文章详情');
         return false;
     }

     if(keywords == '' || keywords == undefined){
         layer.msg('请输入文章关键字');
         return false;
     }

     $.post(urls,{'title':title,'imgs':imgs,'description':description,'content':content,'keywords':keywords},function(ret){
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
     },'json')
});

/**
 *  提交弹窗
 */
function editCust(obj){
    var id  = $(obj).attr('data-id');
    var urls= $(obj).attr('data-url');

    if(id == '' || id== undefined){
        return false;
    }

    layer.open({
        type: 2,
        title: '编辑',
        shadeClose: true,
        shade: 0.8,
        area: ['50%', '85%'],
        content: urls+'?id='+id, //iframe的url
    });
}

/**
 *
 * 编辑提交
 */
$('.edit_cust').click(function(){
    var title = $.trim($('#title').val());
    var imgs  = $('#Images').val();
    var keywords  = $('#keywords').val();
    var description = $.trim($('#description').val());
    var content = ue.getContent();//取得html文本
    var urls = $(this).attr('data-url');
    var  id  = $('#mid').val();

    if(title == '' || title == undefined){
        layer.msg('请输入文章标题');
        return false;
    }

    if(imgs == '' || imgs == undefined){
        layer.msg('请上传文章展示图');
        return false;
    }

    if(content == '' || content == undefined || content == 'undefined'){
        layer.msg('文章详情不能为空');
        return false;
    }

    if(id == '' || id== undefined || id  <= 0){
        return false;
    }

    if(keywords == '' || keywords == undefined){
        layer.msg('请输入文章关键字');
        return false;
    }

    $.post(urls,{'title':title,'imgs':imgs,'description':description,'content':content,'keywords':keywords,'id':id},function(ret){
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
});


/**
 * 删除
 */
function custDel(obj){
    var urls = $(obj).attr('data-url');
    var id  = $(obj).attr('data-id');


    if(urls == '' || urls == undefined){
        return false;
    }

    if(id  == '' || id== undefined){
        return false;
    }

    layer.confirm('您确定要删除？', {
        btn: ['确定','点错了'] //按钮
    }, function(){
        $.get(urls,{'id':id},function(ret){

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

/**
 *取消弹窗
 */
$('.cancle').click(function(){
    parent.layer.closeAll();
});


/**
 * 上传图片
 */
function customerImgs() {
    var formData =new FormData();
    formData.append("file",$("#file")[0].files[0]);

    var urls = "customerImgs";

    $.ajax({
        url: urls,
        type: "post",
        data: formData,
        async:false,
        dataType: 'json',
        cache: false,
        processData : false,
        contentType : false,
        success: function (ret) {
            if (ret.code == 200) {
                $("#imgs").attr('src', ret.path);
                $("#Images").val(ret.path);
                layer.msg(ret.msg,{icon:6});
            } else {
                layer.msg(ret.msg);
            }
        },

    });
    return false;
}