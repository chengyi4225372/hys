<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:88:"/Users/zhanwen/Desktop/hys/public/../application/home/view/programme/productservice.html";i:1580698017;s:67:"/Users/zhanwen/Desktop/hys/application/home/view/common/header.html";i:1580698017;s:67:"/Users/zhanwen/Desktop/hys/application/home/view/common/footer.html";i:1580698017;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit" />
    <meta name="force-rendering" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script>/*@cc_on document.write('\x3Cscript id="_iealwn_js" src="https://support.dmeng.net/ie-alert-warning/latest.js">\x3C/script>'); @*/</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/static/home/css/base.css">
    <link rel="stylesheet" href="/static/home/css/index.css">
    <link rel="stylesheet" href="/static/home/css/productservice.css">
    <link rel="stylesheet" href="/static/home/css/footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400,500,700,900">
    <link rel="stylesheet" href="/static/home/font/syht.css">
    <meta name="keyword" content="惠优税">
    <meta name="description" content="惠优税">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="/static/assets/plugins/layui/layui.all.js"></script>
    <script src="/static/home/js/productservice.js"></script>
    <script src="/static/common/js/open.js"></script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?59bb232bf1ab5a4ee5ca776143a9d145";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>

<body>
    <div class="container">
        <!-- 头部导航 -->
        <div id="header" data-pageId="1">
            <style>
  #header {
    width: 100%;
    background: #fff;
    position: fixed;
    z-index: 999;
    left: 0;
    top: 0;
    -webkit-box-shadow: 0px 1px 7px 0px rgba(199, 199, 199, 0.66);
    box-shadow: 0px 1px 7px 0px rgba(199, 199, 199, 0.66);
  }

  .navBox {
    width: 75rem;
    height: 3.75rem;
    margin: 0 auto;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -moz-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  /* 导航 */
  .navBox .mainNav {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -moz-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .navBox .mainNav .logo {
    width: 8.5rem;
    height: 3rem;
    /* background: skyblue; */
  }
  .navBox .mainNav .logo img{
    width: 100%;
    height: 100%;
  }

  .navBox .mainNav .nav {
    height: 3.75rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -moz-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-left: 7.5rem;
  }

  .navBox .mainNav .nav li {
    margin-right: 3.125rem;
    position: relative;
  }

  .navBox .mainNav .nav li:last-child {
    margin-right: 0;
  }

  .navBox .mainNav .nav li.activeNav::after {
    position: absolute;
    bottom: -0.5rem;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    content: "";
    width: 110%;
    height: 0.25rem;
    -webkit-border-radius: 0.125rem;
    border-radius: 0.125rem;
    background-color: #f85236;
  }

  .navBox .mainNav .nav li a {
    font-size: 1.125rem;
    font-family: "Noto Sans SC", "syht";
    /* font-weight: bold; */
    color: #000;
  }

  /* 登录注册 */
  .navBox .logReg {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
  }

  .navBox .logReg a {
    display: block;
    width: 3.5rem;
    height: 1.625rem;
    text-align: center;
    line-height: 1.625rem;
    font-size: 1rem;
    font-family: "Noto Sans SC", "syht";
    font-weight: 400;
    color: #e8341e;
    background: url("../images/login-bg.png") no-repeat;
    -webkit-background-size: 100% 100%;
    background-size: 100% 100%;
    background-position: center center;
  }

  .navBox .logReg a:last-child {
    margin-left: 1.25rem;
  }

  /* 用户头像 */
  .navBox .avatar {
    position: relative;
    text-align: center;
    height: 3rem;
    margin-top: 1.05rem;
    padding-left: 1.25rem;
    cursor: pointer;
  }

  .navBox .avatar:hover .logout {
    display: block;
  }

  .navBox .avatar .userPic {
    width: 2rem;
    height: 2rem;
    vertical-align: bottom;
    border: 1px solid #ccc;
    -webkit-border-radius: 50%;
    border-radius: 50%;
  }

  .navBox .avatar .tel {
    height: 1.4375rem;
    display: inline-block;
  }

  .navBox .avatar .logout {
    display: none;
    position: absolute;
    width: 5.625rem;
    bottom: -38px;
    left: -0.425rem;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-border-radius: 0.125rem;
    border-radius: 0.125rem;
  }

  .navBox .avatar .logout::after {
    content: "";
    display: block;
    position: absolute;
    top: -1.25rem;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    border-top: 0.625rem solid transparent;
    border-right: 0.625rem solid transparent;
    border-bottom: 0.625rem solid #333;
    border-left: 0.625rem solid transparent;
  }

  .navBox .avatar .logout ul li {
    height: 2.5rem;
    line-height: 2.5rem;
    background-color: #333;
  }

  .navBox .avatar .logout ul li:hover {
    background-color: #fe0b0c;
  }

  .navBox .avatar .logout ul li a {
    font-size: 0.875rem;
    font-family: "Noto Sans SC", "syht";
    font-weight: 500;
    color: #fff;
  }
</style>

<div class="navBox">
  <div class="mainNav">
    <div class="logo"><img src="/static/home/images/secLogo.png" alt=""></div>
    <!-- 导航 -->
    <ul class="nav">
      <li><a href="/">首页</a></li>
      <li><a href="<?php echo url('/home/programme/productservice'); ?>">产品服务</a></li>
      <li><a href="<?php echo url('/home/programme/index'); ?>">行业解决方案</a></li>
      <li><a href="<?php echo url('/home/customer/index'); ?>">客户案例</a></li>
      <li><a href="<?php echo url('home/industry/index'); ?>">新闻资讯</a></li>
    </ul>
  </div>
  <!-- 登录注册 -->
  <div class="logReg" style="display: none;">
    <a href="">登陆</a>
    <a href="">注册</a>
  </div>
  <!-- 用户头像 -->
  <div class="avatar" style="display: none;">
    <img class="userPic" src="/static/home/images/icon.png" alt="">
    <span class="tel">133****5674</span>
    <div class="logout">
      <ul>
        <li><a href="">退出登录</a></li>
      </ul>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    var pageId = Number($('#header').attr('data-pageId'))
    if (pageId == 0) {
      $('.navBox').height('5rem');
      $('.nav').height('5rem');
      $(".logo img").attr('src',"/static/home/images/mainLogo.png");
    }
    $('.nav li').eq(pageId).addClass('activeNav')
    $('.nav li').on('click', function () { $(this).addClass('activeNav chosenPage').siblings().removeClass('activeNav chosenPage') })
    $('.nav li').on('mouseenter', function () { $(this).addClass('activeNav').siblings().removeClass('activeNav') })
    $('.nav').on('mouseleave', function () {
      $('.nav li').removeClass('activeNav')
      if ($('.chosenPage').length < 1) $('.nav li').eq(pageId).addClass('chosenPage')
      $('.chosenPage').addClass('activeNav')
    })
  })
</script>
        </div>

        <!-- banner图 -->
        <div class='header-box'></div>

        <!-- 面包屑 -->
        <div class="bg_bread">

      
        <div class="w bread">
            <a href="/">首页</a>
            <span>&gt;</span>
            <span class="current">产品服务</span>
        </div>
    </div>

        <!-- 内容区 -->
        <div class="content">
            <div class="series">
                <div style="position: relative;">

                    <img src="/static/home/images/series1.png" alt="">
                    <button class="btn1" onclick="alert_open()"></button>

                </div>
                <img src="/static/home/images/series2.png" alt="">
                <img src="/static/home/images/service.png" alt="">
                <img src="/static/home/images/case.png" alt="">
                <img src="/static/home/images/step.png" alt="">
                <img src="/static/home/images/advantage2.png" alt="">
                <img src="/static/home/images/afterSales.png" alt="">
                <button class="btn2" onclick="alert_open()"></button>
                <input type="button"  class="btn3" onclick="alert_open()" />
            </div>
        </div>

    </div>


    <!-- 底部 -->
    <div class="bgBottom">
    <div class="bottomBox">
        <div class="w bottom">
            <div class="aboutUs">
                <span>关于我们</span>
                <p>
                    惠企云旗下【惠优税】，利用最安全、高效、合理的节税措施解决税务难题，打造全国地方政府园区联盟式星级服务新典范和园企共同发展大平台！
                </p>
            </div>
            <div class="navBottom">
                <div class="navList">
                    <dl>
                        <dt>惠企云旗下产品</dt>
                        <dd><a href="<?php echo config('curl.hlg'); ?>">惠灵工</a></dd>
                        <dd><a href="/">惠优税</a></dd>
                        <dd><a href="javascript:;">惠多薪</a></dd>
                        <dd><a href="javascript:;">惠创业</a></dd>
                        <dd><a href="javascript:;">惠找事</a></dd>
                    </dl>
                    <dl>
                        <dt>惠优税</dt>
                        <dd><a href="<?php echo url('/home/programme/index'); ?>">行业解决方案</a></dd>
                        <dd><a href="<?php echo url('/home/programme/productservice'); ?>">产品服务</a></dd>
                        <dd><a href="<?php echo url('/home/customer/index'); ?>">客户案例</a></dd>
                        <dd><a href="javascript:;">招商合作</a></dd>

                    </dl>
                    <dl>
                        <dt>客服热线</dt>
                        <dd><a href="javascript:;">400-150-9896</a></dd>
                        <dd><a href="javascript:;">181-8619-4461</a></dd>
                    </dl>
                    <dl>
                        <dt>办公地址</dt>

                        <dd><a href="javascript:;"></a>武汉市硚口区南国大武汉H座</a></dd>
                        <dd><a href="javascript:;"></a>深圳市福田区第一世界广场A座</a></dd>
                        <dd><a href="javascript:;"></a>北京市西城区贵都国际中心B座</a></dd>
                    </dl>
                </div>

                <ul class="qrCode">
                    <li>
                        <div class="pic">
                            <img src="/static/home/images/weixincode.png" alt="">
                        </div>
                        <span><img src="/static/home/images/weixinicon.png" alt="">微信扫码关注</span>
                        <i>及时获知一手财税信息</i>
                    </li>
                    <li>
                        <div class="pic">
                            <img src="/static/home/images/weibocode.png" alt="">
                        </div>
                        <span><img src="/static/home/images/weiboicon.png" alt="">惠企云微博</span>
                        <!-- <i>及时获一手财税信息</i> -->
                    </li>
                </ul>
            </div>
        </div>
        <div class="w copyRight">©&nbsp;Copyright&nbsp;2019&nbsp;惠企动（湖北）科技有限公司&nbsp;.&nbsp;All Rights
            Reserved&nbsp;ICP证 : 鄂ICP备16008680号-3
        </div>

    </div>
</div>
 
      <!-- 侧边栏consultation资讯 -->
      <div class="consultation">
        <div>
          <div class="consultation-title" onclick="alert_open()">咨询方案</div>
        </div>
        <div>
          <div class="consultation-title2">联系我们</div>
          <div class="consultation-item2">
            <div>
              <p>专家服务电话</p>
              <p>181-8619-4461</p>
            </div>
            <div>
              <p>获取税筹方案</p>
              <p>400-150-9896</p>
            </div>
          </div>
        </div>
        <!-- 返回顶部  -->
        <div class='goTop' id="goTop">
          <div><img src="/static/home/images/top@2x.png" alt=""></div>
          <div>顶部</div>
        </div>
      </div>
  
      <!-- 弹框 -->
      <div class="pop-up-box" id="popbox">
        <div class="form">
            <div class="form-titile">
                <p>方案咨询</p>
                <span class="turnoff" onclick="hide_open()"></span>
            </div>
            <div class="form-content">
                <div><span class="title">您的姓名</span><input type="text" id="contactName" placeholder="请输您的姓名"></div>
                <div><span class="title">联系方式</span><input type="text" id="contactMobile" placeholder="请输入您的手机号"></div>
                <div><span class="title">公司名称</span><input type="text" id="companyName" placeholder="若无公司请填写自雇"></div>
                <input type='hidden' id='sources' value='惠优税'>
                <input type='hidden' id='identifications' value='企业税筹'>
                <div class="form-btn" onclick="form_btn()">获取方案</div>
            </div>
            <!-- 提交成果后弹窗 -->
            <div class="mask-box">
                <span></span>
                <p class="mask-box-title">提交成功</p>
                <p class="mask-box-content">我们会在一个工作日内联系您</p>
            </div>
        </div>

    </div>




</body>
<script>
    $(function () {
        $('.nav ul li').on('click', function () {
            $(this).addClass('nav-active chosenPage').siblings().removeClass('nav-active chosenPage')
        })
        $('.nav ul li').on('mouseenter', function () {
            $(this).addClass('nav-active').siblings().removeClass('nav-active')
        })
        $('.nav').on('mouseleave', function () {
            $('.nav ul li').removeClass('nav-active')
            if ($('.chosenPage').length < 1) $('.nav ul li').eq(1).addClass('chosenPage')
            $('.chosenPage').addClass('nav-active')
        })

        /* 小按钮点击切换背景图 */
        $('.btn1').mousedown(function(){
            $(this).addClass('actLittleBtn')
        }).mouseup(function(){
            $(this).removeClass('actLittleBtn')
        })
        $('.btn2').mousedown(function(){
            $(this).addClass('actLittleBtn')
        }).mouseup(function(){
            $(this).removeClass('actLittleBtn')
        })
    })

</script>


</html>