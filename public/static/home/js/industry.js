
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
 * 搜索t
 */
$(function(){
    $('#searched').click(function(){
        var keyword =  $.trim($('#keyword').val());
        var urls  = $(this).attr('data-url');
        console.log(keyword);
        if(keyword == '' || keyword== undefined || keyword =='undefined'){
            layer.msg('请输入需要搜索的文字');
            return false;
        }
        window.location.href = urls+'?keyword='+keyword;
    });



    /* 客户案例按钮效果 */
    $('.item-comtent-more').mouseover(function(){
        $(this).addClass('activeMore')
    }).mouseleave(function(){
        $(this).removeClass('activeMore')
    })
    $('.item-comtent-more').mousedown(function(){
        $(this).addClass('activeMore')
    }).mouseup(function(){
        $(this).removeClass('activeMore')
    })
});

function trims(str){
    return str.replace(/\s/g,'%20');  //去除字符算中的空格
}


/** 全局变量 **/
var keyword = []; //关键字 数组
var titles  = ''; //关键字分割成字符串
var hrefs   = '';  //详情页url
var urls    = ''; //ajax 提交url
var key     = ''; //分割关键字
/** 新闻资讯热门搜索 **/
function hotsearch(obj) {
    urls = $(obj).attr('data-url');
    hrefs  = $(obj).attr('data-href');

    var searchs = $(obj).attr('data-title'); //获取当前的搜索关键字

    var index = $.inArray(searchs,keyword);

    if(index >= 0){
        keyword.pop(searchs); //如果数组中已经存在，则移除
    }

    keyword.push(searchs);

    if (keyword == '' || keyword == undefined || keyword == 'undefined') {
        return false;
    }

    if(keyword.length == 0 || keyword.length =='' || keyword.length == undefined){
        layer.msg('请选择关键字进行查询');
        return false;
    }

    titles = keyword.join(',')

    $.post(urls,{'title':titles},function(ret){
        if(ret.code == 200){
            if(ret.data.length<=0){
                $('#shang li').remove(); //清空原有标签
                var arr = '';
                arr+= "<li><div class='tabs-items-content'>";
                arr+= "<div class='tabs-items-content-text figcaption'>";
                arr+= "<p>抱歉，没有找到与<b style='color: #ff2222'></b>的相关结果。</p>";
                arr+= "</div></div></li>";
                $("#shang").append(arr).show();
            } else {
                $('#shang li').remove(); //清空原有标签
                //数据列表
                $.each(ret.data,function(item,index){
                    var content = '';

                    key = index.keywords.split(',');//分割关键字

                    content+= "<li><a href="+hrefs+"?mid="+index.id+">";
                    content+= "<div class='infoItem'><div class='infoLeft'>";
                    //默认图片
                    if(index.imgs == '' || index.imgs == undefined){
                        content+= "<img src='/static/home/images/infoItem.jpg'></div>";
                    }else{
                        content+="<img src="+trims(index.imgs)+"></div>";
                    }
                    content+= "<div class='infoRight'><div class='rightTop'>";
                    content+= "<div class='itemTitle'>"+index.title+"</div>";
                    content+= "<span class='itemTime'><img src='/static/spirit/images/shijian2x.png'>";
                    content+= "<span>"+index.create_time+"</span>";
                    content+= "</span></div>";
                    content+= "<p>"+index.description+"</p>";
                    content+= "</div></div></a>";
                    content+= "<ul class='tags'>";
                    for(var i in key){
                        content+= "<li data-title="+key[i]+">";
                        content+=  key[i];
                        content+= "</li>";
                    }
                    content+= "</ul>";
                    $("#shang").append(content).show();
                });

                // 分页
                if(ret.count <= 0){
                    return ;
                } else {
                    $('.page').remove();
                    var page  = '';
                    page += "<ul class='page'>";
                    //上一页
                    page += "<li class='prev' onclick='pagehrefs(urls,-1,titles,"+ret.page+","+ret.count+");'>上一页</li>";
                    for(var i=1;i<=ret.count;i++){
                        //当前页
                        if(ret.page == i){
                            page += "<li class='activePage' onclick='pagehrefs(urls,0,"+ret.page+","+ret.count+");'>"+i+"</li>";
                        }
                        //不是当前页
                        if(ret.page != i){
                            page += "<li onclick='pagehrefs(urls,"+i+",titles,"+ret.page+","+ret.count+");'>"+i+"</li>";
                        }

                    }
                    //下一页
                    page += "<li class='next' onclick='pagehrefs(urls,1,titles,"+ret.page+","+ret.count+");'>下一页</li>";
                    page +="</ul>";
                    $('.pageNation').append(page).show();
                }
            }
        }

        if(ret.code == 400){
            $('#shang li').remove();
            var arrs = '';
            arrs+= "<li><div class='tabs-items-content'>";
            arrs+= "<div class='tabs-items-content-text figcaption'>";
            arrs+= "<p>抱歉，没有找到相关结果。</p>";
            arrs+= "</div></div></li>";
            $("#shang").append(arrs).show();
        }

    });

}

/** 清除关键字 **/
function nullhot(obj){
    var title = $(obj).parents('li').attr('data-title');

    urls  = $(obj).attr('data-url');
    keyword.pop(title);
    titles = keyword.join(',');

    $.post(urls,{'title':titles},function(ret){
        if(ret.code == 200){
            if(ret.data.length<=0){
                $('#shang li').remove(); //清空原有标签
                var arr = '';
                arr+= "<li><div class='tabs-items-content'>";
                arr+= "<div class='tabs-items-content-text figcaption'>";
                arr+= "<p>抱歉，没有找到相关结果。</p>";
                arr+= "</div></div></li>";
                $("#shang").append(arr).show();
            } else {
                $('#shang li').remove(); //清空原有标签
                //数据列表
                $.each(ret.data,function(item,index){
                    var content = '';

                    key = index.keywords.split(',');//分割关键字

                    content+= "<li><a href="+hrefs+"?mid="+index.id+">";
                    content+= "<div class='infoItem'><div class='infoLeft'>";
                    //默认图片
                    if(index.imgs == '' || index.imgs == undefined){
                        content+= "<img src='/static/home/images/infoItem.jpg'></div>";
                    }else{
                        content+="<img src="+trims(index.imgs)+"></div>";
                    }
                    content+= "<div class='infoRight'><div class='rightTop'>";
                    content+= "<div class='itemTitle'>"+index.title+"</div>";
                    content+= "<span class='itemTime'><img src='/static/spirit/images/shijian2x.png'>";
                    content+= "<span>"+index.create_time+"</span>";
                    content+= "</span></div>";
                    content+= "<p>"+index.description+"</p>";
                    content+= "</div></div></a>";
                    content+= "<ul class='tags'>";
                    for(var i in key){
                        content+= "<li data-title="+key[i]+">";
                        content+=  key[i];
                        content+= "</li>";
                    }
                    content+= "</ul>";
                    $("#shang").append(content).show();
                });

                // 分页
                if(ret.count <= 0){
                    return ;
                } else {
                    $('.page').remove();
                    var page  = '';
                    page += "<ul class='page'>";
                    page += "<li class='prev' onclick='pagehrefs(urls,-1,titles,"+ret.page+","+ret.count+");'>上一页</li>";
                    for(var i=1;i<=ret.count;i++){
                        //当前页
                        if(ret.page == i){
                            page += "<li class='activePage' onclick='pagehrefs(urls,0,"+ret.page+","+ret.count+");'>"+i+"</li>";
                        }
                        //不是当前页
                        if(ret.page != i){
                            page += "<li onclick='pagehrefs(urls,"+i+",titles,"+ret.page+","+ret.count+");'>"+i+"</li>";
                        }

                    }
                    page += "<li class='next' onclick='pagehrefs(urls,1,titles,"+ret.page+","+ret.count+");'>下一页</li>";
                    page +="</ul>";
                    $('.pageNation').append(page).show();
                }
            }
        }

        if(ret.code == 400){
            $('#shang li').remove();
            var arrs = '';
            arrs+= "<li><div class='tabs-items-content'>";
            arrs+= "<div class='tabs-items-content-text figcaption'>";
            arrs+= "<p>抱歉，没有找到相关结果。</p>";
            arrs+= "</div></div></li>";
            $("#shang").append(arrs).show();
        }

    });
}

/**
 * 新闻资讯分页跳转
 * url    跳转连接
 * i      页数
 * size   每页显示条数
 * titles 搜索关键字
 * pages  当前页
 * count  总页数
 **/
function pagehrefs(purls,i,titles,pages,count){

    if(i == 0 || i == '' || i == undefined){
        return false;
    }

    //上一页
    if(i == -1){
        i= pages + i;
        if(i <=0 ){
            layer.msg('已经是第一页了');
            return false;
        }
    }else {
        //下一页
        i= pages +i;
        if(i > count){
            layer.msg('已经是最后一页了');
            return false;
        }
    }

    $.post(purls,{'title':titles,'page':i},function(ret){
        if(ret.code == 200){
            if(ret.data.length<=0){
                $('#shang li').remove(); ////清空原有标签
                var arr = '';
                arr+= "<li><div class='tabs-items-content'>";
                arr+= "<div class='tabs-items-content-text figcaption'>";
                arr+= "<p>抱歉，没有找到相关结果。</p>";
                arr+= "</div></div></li>";
                $("#shang").append(arr).show();
            } else {
                $('#shang li').remove(); //清空原有标签
                //数据列表
                $.each(ret.data,function(item,index){
                    var content = '';
                    key = index.keywords.split(',');//分割关键字
                    content+= "<li><a href="+hrefs+"?mid="+index.id+">";
                    content+= "<div class='infoItem'><div class='infoLeft'>";
                    //默认图片
                    if(index.imgs == '' || index.imgs == undefined){
                        content+= "<img src='/static/home/images/infoItem.jpg'></div>";
                    }else{
                        content+="<img src="+trims(index.imgs)+"></div>";
                    }
                    content+= "<div class='infoRight'><div class='rightTop'>";
                    content+= "<div class='itemTitle'>"+index.title+"</div>";
                    content+= "<span class='itemTime'><img src='/static/spirit/images/shijian2x.png'>";
                    content+= "<span>"+index.create_time+"</span>";
                    content+= "</span></div>";
                    content+= "<p>"+index.description+"</p>";
                    content+= "</div></div></a>";
                    content+= "<ul class='tags'>";
                    for(var i in key){
                        content+= "<li data-title="+key[i]+">";
                        content+=  key[i];
                        content+= "</li>";
                    }
                    content+= "</ul>";
                    $("#shang").append(content).show();
                });
                // 分页
                if(ret.count <= 0){
                    return ;
                } else {
                    $('.page').remove();
                    var page  = '';
                    page += "<ul class='page'>";
                    page += "<li class='prev' onclick='pagehrefs(urls,-1,titles,"+ret.page+","+ret.count+");'>上一页</li>";
                    for(var i=1;i<=ret.count;i++){
                        //当前页
                        if(ret.page == i){
                            page += "<li class='activePage' onclick='pagehrefs(urls,0,"+ret.page+","+ret.count+");'>"+i+"</li>";
                        }
                        //不是当前页
                        if(ret.page != i){
                            page += "<li onclick='pagehrefs(urls,"+i+",titles,"+ret.page+","+ret.count+");'>"+i+"</li>";
                        }

                    }
                    page += "<li class='next' onclick='pagehrefs(urls,1,titles,"+ret.page+","+ret.count+");'>下一页</li>";
                    page +="</ul>";
                    $('.pageNation').append(page).show();
                }
            }
        }

        if(ret.code == 400){
            $('#shang li').remove();
            var arrs = '';
            arrs+= "<li><div class='tabs-items-content'>";
            arrs+= "<div class='tabs-items-content-text figcaption'>";
            arrs+= "<p>抱歉，没有找到相关结果。</p>";
            arrs+= "</div></div></li>";
            $("#shang").append(arrs).show();
        }

    });

}




