<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\phpEnv\www\hys\public/../application/home\view\programme\index.html";i:1575441373;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="/static/home/css/base.css">
  <link rel="stylesheet" href="/static/home/css/programme.css">
  <script src="/static/home/js/jquery.js"></script>
  <script src="/static/home/js/programme.js"></script>
</head>

<body>
  <div class="container">
    <!-- 导航部分 -->
    <div class="nav-box">
      <div class="w nav-container clearfix">
        <!-- logo图 -->
        <div class="logo clearfix">
          <img src="/static/home/images/logo.png" alt="">
          <h1>惠优税</h1>
        </div>
        <!-- nav部分 -->
        <div class="nav">
          <ul class="clearfix">
            <li><a href="/">首页</a></li>
            <li><a href="<?php echo url('/home/programme/productservice'); ?>"> 产品服务</a></li>
            <li class="nav-active"><a href="<?php echo url('/home/programme/index'); ?>">行业解决方案</a></li>
            <li><a href="<?php echo url('/home/customer/index'); ?>">客户案例</a></li>
            <li><a href="<?php echo url('/home/industry/index'); ?>">行业新闻资讯</a></li>
            <li><a href="#">会员通道</a></li>
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
        <!-- <div class="user-icon-box">
          <img class="user-icon" src="/static/home/images/icon.png" alt="">
          <span class="phone">133****5674</span>
          <div class="login-out">
            <ul>
              <li><a href="">退出登录</a></li>
            </ul>
          </div>
        </div> -->
      </div>
    </div>

    <!-- 头部 -->
    <div class='header-box'></div>

    <!-- 选项卡 -->
    <div class="w bg_tab">
      <div class="tabBox">
        <div class="tab">
          <ul>
            <li class="activeTab"><a href="javascript:;">O2O服务模式(共享经济)</a></li>
            <li><a href="javascript:;">律师行业税务筹划方案</a></li>
            <li><a href="javascript:;">股权投资行业筹划方案</a></li>
            <li><a href="javascript:;">医药行业筹划方案</a></li>
            <li><a href="javascript:;">网红主播筹划方案</a></li>
            <li><a href="javascript:;">科技服务行业筹划方案</a></li>
            <li><a href="javascript:;">贸易采集行业筹划方案</a></li>
          </ul>
          <div class="tabCon">
            <img src="/static/home/images/0case.png" alt="">
          </div>
          <div class="tabTitle">
            O2O服务模式(共享经济)
          </div>
        </div>
      </div>
    </div>

  </div>


  <!-- 底部 -->
  <div class="fotter-box">
    <div class="w fotter">
      <div class='parter_catefories'>
        <dl>
          <dt><a href="#">服务产品</a></dt>
          <dd><a href="#">服务型税筹</a></dd>
          <dd><a href="#">门户型税筹</a></dd>
          <dd><a href="#">人力资源</a></dd>
        </dl>
        <dl>
          <dt><a href="#">招商政策</a></dt>
          <dd><a href="#">招商政策网</a></dd>
        </dl>
        <dl>
          <dt><a href="#">合作</a></dt>
          <dd><a href="#">代理合作</a></dd>
        </dl>
        <dl>
          <dt><a href="#">公司信息</a></dt>
          <dd><a href="#">瑟维斯有限公司</a></dd>
          <dd><a href="#">惠创优产业联盟</a></dd>
          <dd><a href="#">中兴瑞华有限公司</a></dd>
        </dl>
        <dl>
          <dt><a href="#">联系我们</a></dt>
          <dd><a href="#">400-150-9896</a></dd>
          <dd><a href="#">hcylm008@dingtalk.com</a></dd>
          <dd><a href="#">武汉市硚口区南国大武汉H座18楼</a></dd>
          <!-- <dd id="social">
            <div><img src="/static/home/images/bo.png" alt=""></div>
            <div><img src="/static/home/images/wx.png" alt=""></div>
            <div><img src="/static/home/images/tie.png" alt=""></div>
          </dd> -->
        </dl>

      </div>
      <div class='concat_icon clearfix'>
        <div><img src="/static/home/images/bo.png" alt=""></div>
        <div><img src="/static/home/images/wx.png" alt=""></div>
        <div><img src="/static/home/images/tie.png" alt=""></div>
      </div>
      <div class="fotter-line"></div>
      <div class="copyRight">© Copyright 2019 惠企动（湖北）科技有限公司 . All Rights Reserved</div>
    </div>
  </div>

  <!-- 侧边栏bottom资讯 -->
  <div class="bottom">
    <div>
      <div class="bottom-title">立即预约咨询</div>
      <div class="bottom-item2 order">
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
    <div>
      <div class="bottom-title">联系我们</div>
      <div class="bottom-item2">
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
    <!-- 返回顶部 -->
    <div class='goTop' id="goTop">
      <div><img src="/static/home/images/top@2x.png" alt=""></div>
      <div>顶部</div>
    </div>
  </div>


</body>
<script>
  $(function () {

    /* 头部导航点击和hover效果 */
    $('.nav ul li').on('click', function () {
      $(this).addClass('nav-active chosenPage').siblings().removeClass('nav-active chosenPage')
    })
    $('.nav ul li').on('mouseenter', function () {
      $(this).addClass('nav-active').siblings().removeClass('nav-active')
    })
    $('.nav').on('mouseleave', function () {
      $('.nav ul li').removeClass('nav-active')
      if ($('.chosenPage').length < 1) $('.nav ul li').eq(2).addClass('chosenPage')
      $('.chosenPage').addClass('nav-active')
    })

    /* 选项卡切换 */
    $('.tab ul li a').on('click', function () {
      $('.tabCon img').attr('src', `/static/home/images/${$(this).parent().index()}case.png`)
      $('.tabTitle').html($(this).html())
      $(this).parent().addClass('activeTab').siblings().removeClass('activeTab')
    })
  })

</script>

</html>