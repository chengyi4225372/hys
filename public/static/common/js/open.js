/*手机验证*/
function checkPhone(phone) {
    var tel_reg = /^1(3|4|5|6|7|8|9)\d{9}$/;
    if (tel_reg.test(phone)) {
        return true;
    } else {
        return false;
    }
}

/**
 * 检测是否纯数字或者英文字母
 */
function check_number(number){
    var test_num = /^[A-Za-z0-9]+$/;
    if (test_num.test(number)) {
        return true;
    } else {
        return false;
    }
}


/**
 * 弹窗 弹出
 */
function alert_open(){
    $('#popbox').show();
    $('.mask-box').hide();
}

/**
 * 关闭弹窗
 */
function hide_open(){
    $('#popbox').hide();
}
/*接口 公海*/
var gurl = "http://172.26.3.8:8089";
//var gurl = "http://172.26.2.11:8089"; //bo

var urkl = gurl + "/api/wechatForeign/public/addGatewayPotentialCustomer";

/**
* 提交表单
*/
function form_btn(){
    console.log(111);
    $('.form-btn').attr('disabled', "true");
    var datas = {};

    datas.contactName = $.trim($("#contactName").val());//联系姓名
    datas.companyName = $.trim($("#companyName").val()); //公司
    datas.contactMobile = $.trim($("#contactMobile").val());//手机
    datas.source = $("#sources").val(); //渠道
    datas.identification = $("#identifications").val();//标识

    if (datas.contactMobile == '' || datas.contactMobile == undefined) {
        layer.msg('请填写联系电话');
        return false;
    }

    if (checkPhone(datas.contactMobile) === false) {
        layer.msg("联系电话不合法");
        return false;
    }

    if (datas.companyName == '' || datas.companyName == undefined) {
        layer.msg('请填写公司名称');
        return false;
    }

    if(check_number(datas.companyName) == true){
        layer.msg('公司名称不可以是纯数字或者纯英文');
        return false;
     }

    if (datas.contactName == '' || datas.contactName == undefined) {
        layer.msg('请填写您的姓名');
        return false;
    }

    $.ajax({
        url: urkl,
        type: "post",
        headers: {
            "Content-Type": "application/json",
        },
        dataType: 'json',
        data: JSON.stringify(datas),
        success: function (ret) {

            if (ret.status == 200 && ret.rel == true) {
                $('.mask-box').fadeIn(1000);
                window.setTimeout(function () {
                    $('.mask-box').fadeOut(1000, function () {
                        window.location.reload();
                        $('.form-btn').attr('disabled', "false");
                    });
                }, 3000)
            }

            //201 号码已经存在
            if (ret.status == 201) {
                layer.msg(ret.message, function () {
                    parent.location.reload();
                })
            }

            if (ret.status == 500) {
                layer.msg('网络错误，请稍后再提交。', function () {
                    parent.location.reload();
                });
            }
        },
        error: function (ret) {
            console.log(ret);
        }

    });
}


$(function(){
    $('.form-btn').mouseover(function(){
        $(this).addClass('activePop')
    }).mouseleave(function(){
        $(this).removeClass('activePop')

    })
    $('.form-btn').mousedown(function(){
        $(this).addClass('activePop')
    }).mouseup(function(){
        $(this).removeClass('activePop')

    })
})