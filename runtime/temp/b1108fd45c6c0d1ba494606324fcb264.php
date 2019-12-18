<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:108:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\hys\public/../application/home\view\customer\index.html";i:1576674021;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="renderer" content="webkit" />
  <meta name="force-rendering" content="webkit" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <script>/*@cc_on document.write('\x3Cscript id="_iealwn_js" src="https://support.dmeng.net/ie-alert-warning/latest.js">\x3C/script>'); @*/</script>
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?php echo $title; ?></title>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" href="/static/home/css/base.css">
  <link rel="stylesheet" href="/static/home/css/customer.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400,500,700,900">
  <link rel="stylesheet" href="/static/home/css/footer.css">
  <!--    <script src="/static/spirit/js/clamp.js"></script>-->
  <script src="/static/assets/plugins/layui/layui.all.js"></script>
  <script src='/static/common/js/common.js'></script>
  <script src='/static/common/js/index.js'></script>
  <script src='/static/common/js/public.js'></script>
  <script src='/static/home/js/industry.js'></script>
  <script src="/static/common/js/open.js"></script>
  <script src='/static/home/js/footer.js'></script>
</head>

<body>

  <div class='container'>

    <!-- 导航部分 -->
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
                    <li class="nav-active"><a href="<?php echo url('/home/customer/index'); ?>">客户案例</a></li>
                    <li><a href="<?php echo url('home/industry/index'); ?>">新闻资讯</a></li>
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


    <!-- 面包屑 -->
    <div class="crumbs">
      <div class="crumbs-box w">
        <b><a href="<?php echo url('/home/index/index'); ?>">惠优税></a></b>
        <b> 客户案例</b>
      </div>
    </div>

    <!-- 客户案例 -->
    <div class="bg_tab">
      <div class="tabBox w">
        <div>
          客户案例
        </div>
        <ul class="clearfix">
          <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li>
            <a href="<?php echo url('/home/customer/info',['mid'=>$vo['id']]); ?>">
              <div class="item-img">
                <img src="<?php echo !empty($vo['imgs'])?$vo['imgs']:''; ?>" alt="">
              </div>
              <div class="item-content">
                <p>
                    <?php echo $vo['title']; ?>
                </p>
                <p><?php echo mb_substr($vo['description'],'0','300','utf-8'); ?></p>
              </div>
              <div class="item-comtent-more">查看详情</div>
            </a>
          </li>
           <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
  </div>



  <!-- 返回顶部 -->
  <!-- <div class='goTop' id="goTop">
    <i></i>
    <div>返回顶部</div>
  </div> -->
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



<!-- 底部 -->
<div id="footer"></div>

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
        if ($('.chosenPage').length < 1) $('.nav ul li').eq(3).addClass('chosenPage')
        $('.chosenPage').addClass('nav-active')
      })

    })
  </script>

</body>

</html>