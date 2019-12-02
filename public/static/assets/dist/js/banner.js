/**
 * 添加
 */
$('#addbanner').click(function(){
   var urls  = $(this).attr('data-url');
   layer.open({
       type: 2,
       title: '添加',
       shadeClose: true,
       shade: 0.8,
       area: ['40%', '50%'],
       content: urls, //iframe的url
   });
});

/**
* 添加逻辑
 */
$('.add_banner').click(function(){
    var urls  = $(this).attr('data-url');

    var imgs = $('#Images').val();

    if(imgs == '' || imgs == undefined){
        layer.msg('请上传图片');
        return false;
    }

    $.post(urls,{'imgs':imgs},function(ret){
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
 编辑弹窗
 */
function editData(id,urls){
   var hrefs = urls +'?mid='+id;
    layer.open({
        type: 2,
        title: '编辑',
        shadeClose: true,
        shade: 0.8,
        area: ['40%', '50%'],
        content: hrefs, //iframe的url
    });
}

/**
 * 编辑提交
 */
$('.edit_banner').click(function(){
   var id =  $('#mid').val();
   var imgs =  $('#Images').val();
   var urls  = $(this).attr('data-url');
   if(id == '' || id == undefined || id == 'undefined'){
       return false;
   }

   if(imgs == '' || imgs  == undefined){
       layer.msg('请上传图片！');
       return false;
   }

   $.post(urls,{'mid':id,'imgs':imgs},function(ret){
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
 *取消弹窗
 */
$('.cancle').click(function(){
    parent.layer.closeAll();
})

/**
 * 上传图片
 */
function uploadImgs() {
    var formData =new FormData();
    formData.append("file",$("#file")[0].files[0]);

    var urls = "uploadimgs";

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
