<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:108:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\hys\public/../application/home\view\industry\infos.html";i:1576657704;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit" />
    <meta name="force-rendering" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script>/*@cc_on document.write('\x3Cscript id="_iealwn_js" src="https://support.dmeng.net/ie-alert-warning/latest.js">\x3C/script>'); @*/</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/static/home/css/base.css">
    <link rel="stylesheet" href="/static/home/css/info.css">
    <link rel="stylesheet" href="/static/home/css/footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400,500,700,900">

    <meta name="keyword" content="<?php echo $info['keywords']; ?>">
    <meta name="description" content="<?php echo $info['description']; ?>">
    <script src="/static/home/js/jquery.js"></script>
    <script src="/static/assets/plugins/layui/layui.all.js"></script>
    <script src="/static/home/js/customer.js"></script>
    <script src="/static/common/js/open.js"></script>
    <script src='/static/home/js/footer.js'></script>

</head>

<body>
<div class="container">
    <!-- 导航部分 -->
    <div class="nav-box">
        <div class="w nav-container clearfix">
            <!-- logo图 -->
            <div class="logo clearfix">
                <img src="/static/home/images/logo2.png" alt="">
                
            </div>
            <!-- nav部分 -->
            <div class="nav">
                <ul class="clearfix">
                    <li><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>
                    <li><a href="<?php echo url('/home/programme/productservice'); ?>"> 产品服务</a></li>
                    <li><a href="<?php echo url('/home/programme/index'); ?>">行业解决方案</a></li>
                    <li><a href="<?php echo url('/home/customer/index'); ?>">客户案例</a></li>
                    <li class="nav-active"><a href="<?php echo url('home/industry/index'); ?>">行业新闻资讯</a></li>
                    <!-- <li><a href="#">会员通道</a></li> -->
                </ul>
            </div>
            <!-- 登陆注册 -->
            <!-- <div class="loging clearfix">
                        <div class="register-btn"><a href="./login.html">
                            登陆
                          </a></div>
                        <div class="loging-btn"><a href="./register.html">注册</a></div>
                      </div> -->
            <!-- 头像部分 -->
            <!-- 注释掉
            <div class="user-icon-box">
                <img class="user-icon" src="/static/home/images/icon.png" alt="">
                <span class="phone">133****5674</span>
                <div class="login-out">
                    <ul>
                        <li><a href="">退出登录</a></li>
                    </ul>
                </div>
            </div>
            -->
        </div>
    </div>
    <div class="banner">

    </div>

    <div class='main_content'>
        <div class="bg_bread">

       
        <div class='w bread_title'>
            <a onclick="go_work(this)" data-url="<?php echo url('/home/index/index'); ?>">惠优税</a> >
            <a onclick="go_news(this)" data-url="<?php echo url('/home/industry/index'); ?>">行业新闻资讯</a> > <span style="color: #E8341E;">详情</span></div>
        </div>
        <div class='content_middle'>
            
            <div class='pic_total'>
                <div class='pic_title'><?php echo $info['title']; ?></div>
                <div class='time'><?php echo $info['create_time']; ?></div>
                <div class='line'></div>
                <div class='tuwen'>
                    <div class='wenzi'>
                        <?php echo $info['content']; ?>
                    </div>

                    <!-- <div class='page'>
                      <?php if(empty($top) || (($top instanceof \think\Collection || $top instanceof \think\Paginator ) && $top->isEmpty())): ?>
                      <div><span>上一篇:</span><a href="#">已经是第一篇了</a></div>
                      <?php else: ?>
                      <div><span>上一篇:</span><a href="<?php echo url('/home/index/detail',['mid'=>$top['id']]); ?>"><?php echo $top['title']; ?></a></div>
                      <?php endif; if(empty($next) || (($next instanceof \think\Collection || $next instanceof \think\Paginator ) && $next->isEmpty())): ?>
                      <div><span>下一篇:</span><a href="#">已经是最后一篇</a></div>
                      <?php else: ?>
                      <div><span>下一篇:</span><a href="<?php echo url('/home/index/detail',['mid'=>$next['id']]); ?>"><?php echo $next['title']; ?></a></div>
                      <?php endif; ?>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg_piece">
    <div class="w piece">

        <p><span>上一篇：</span><a href="">已经是第一篇了</a></p>
        <p><span>下一篇：</span><a href="">已经是第一篇了</a></p>
    </div>
</div>
<!-- 底部 -->
<div id="footer"></div>
          <!-- 侧边栏consultation资讯 -->
          <div class="consultation">
            <div>
              <div class="consultation-title" onclick="alert_open()">咨询方案</div>
              <!-- <div class="consultation-item">
                <ul>
                  <li><a href="/">惠优税</a></li>
                  <li><a href="<?php echo config('curl.hlg'); ?>">惠灵工</a></li>
                  <li><a href="<?php echo config('curl.hdx'); ?>">惠多薪</a></li>
                  <li><a href="<?php echo url('/home/searches/index'); ?>">惠找事</a></li>
                  <li><a href="<?php echo config('curl.hcy'); ?>">惠创业</a></li>
                  <li><a href="<?php echo config('curl.hqd'); ?>">惠企动</a></li>
                </ul>
              </div> -->
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
                  <p>400-150-9898</p>
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
                if ($('.chosenPage').length < 1) $('.nav ul li').eq(4).addClass('chosenPage')
                $('.chosenPage').addClass('nav-active')
            })

        })
</script>

</html>