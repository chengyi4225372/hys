/**
 * 搜索
 */
 //  todo 未开始


/**
 * 富文本
 */
//富文本
var ue = UE.getEditor('content',{initialFrameWidth:'100%',initialFrameHeight:400,charset:"utf-8"});


/**
 * 添加弹窗
 */
$('#addtaxa').click(function(){
     var urls = $(this).attr('data-url');
     layer.open({
         type: 2,
         title: '添加',
         shadeClose: true,
         shade: 0.8,
         area: ['75%', '75%'],
         content: urls, //iframe的url
     });
});

/**
 * 添加 提交
 */
$('.add_taxa').click(function(){
    var title = $.trim($('#title').val());
    var imgs  = $('#Images').val();
    var description = $('#description').val();
    var keywords    = $('#keywords option:selected').val();
    var content     = ue.getContent();
    var urls        =  $(this).attr('data-url');

    if(title  == '' || title == undefined){
        layer.msg('请输入新闻标题');
        return false;
    }

    if(imgs =='' || imgs == undefined){
        layer.msg('请上传展示图');
        return false;
    }

    if(description == '' || description == undefined){
        layer.msg('请输入新闻描述信息');
        return false;
    }

    if(content == '' || content == undefined){
        layer.msg('新闻详情不能为空');
        return false;
    }

    $.post(urls,{'title':title,'keyword':JSON.stringify(keywords),'imgs':imgs,'description':description,'content':content},function(ret){
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
})


/**
 * 编辑 弹窗
 */
function taxtedit(id,urls){
    var hrefs = urls+"?id="+id;
    layer.open({
        type: 2,
        title: '编辑',
        shadeClose: true,
        shade: 0.8,
        area: ['75%', '75%'],
        content: hrefs, //iframe的url
    });
}


/**
 * 编辑提交
 */
$('.edit_taxa').click(function(){
    var title = $.trim($('#title').val());
    var imgs  = $('#Images').val();
    var description = $('#description').val();
    var keywords    = $("#keywords").val();
    var content     = ue.getContent();
    var urls        =  $(this).attr('data-url');
    var mid         = $('#mid').val();

    if(title  == '' || title == undefined){
        layer.msg('请输入新闻标题');
        return false;
    }

    if(imgs =='' || imgs == undefined){
        layer.msg('请上传展示图');
        return false;
    }

    if(description == '' || description == undefined){
        layer.msg('请输入新闻描述信息');
        return false;
    }

    if(content == '' || content == undefined){
        layer.msg('新闻详情不能为空');
        return false;
    }


    $.post(urls,{'title':title,'mid':mid,'keyword':JSON.stringify(keywords),'imgs':imgs,'description':description,'content':content},function(ret){

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
})



/**
 * 取消
 */
$('.cancle').click(function(){
    parent.layer.closeAll();
});


/**
 * 上传图片
 * @returns {boolean}
 */
function uploads() {
    var formData =new FormData();
    formData.append("file",$("#file")[0].files[0]);

    var urls = "uploadImgs";

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