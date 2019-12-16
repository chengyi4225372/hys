<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"C:\phpEnv\www\hys\public/../application/home\view\customer\index.html";i:1576490234;}*/ ?>
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
  <link rel="stylesheet" href="/static/home/css/customer.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400,500,700,900">
  <link rel="stylesheet" href="/static/home/css/footer.css">
  <script src="/static/home/js/jquery.js"></script>
  <!-- <script src="/static/home/js/programme.js"></script> -->
  <script src="/static/assets/plugins/layui/layui.all.js"></script>
  <script src="/static/home/js/customer.js"></script>
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
            <li><a href="/">首页</a></li>
            <li><a href="<?php echo url('/home/programme/productservice'); ?>"> 产品服务</a></li>
            <li><a href="<?php echo url('/home/programme/index'); ?>">行业解决方案</a></li>
            <li class="nav-active"><a href="<?php echo url('/home/customer/index'); ?>">客户案例</a></li>
            <li><a href="<?php echo url('home/industry/index'); ?>">行业新闻资讯</a></li>
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
        <!-- 注释掉
            <div class="user-icon-box">
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
        <span><a onclick="go_work(this)" data-url="<?php echo url('/home/index/index'); ?>">惠优税</a>&nbsp;&gt;</span>
        <span> 客户案例</span>
      </div>
    </div>
  </div>
  <!-- 客户案例 -->
  <!-- <div class="bg_tab">
    <div class="tabBox w">
      <ul class="clearfix">
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li onclick="window.location.href=$(this).attr('data-url')" data-url="<?php echo url('/home/customer/info'); ?>?mid=<?php echo $vo['id']; ?>">
          <div class="item-img">
            <img src="<?php echo !empty($vo['imgs'])?$vo['imgs']:''; ?>" alt=""></div>
          <div class="item-content">
             <p>
              <?php echo $vo['title']; ?>
            </p>
            <p>
              <?php echo mb_substr($vo['description'],'0','300','utf-8'); ?>
            </p>
            <a href="<?php echo url('/home/customer/info'); ?>?mid=<?php echo $vo['id']; ?>">查看案例>></a>
          </div>

        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>

      </ul>
    </div>

  </div> -->

 

  <div class="bg_case">
    <div class="w caseTitle">
      <span>客户案例</span>
    </div>
    <ul class="w caseWrap">
      <li class="caseItem">
        <div class="bg_img"><img src="" alt=""></div>
        <div class="itemTitle">节税和逃税区别在哪？</div>
        <p>合理合法的进行纳税筹划是正常有效税筹划是正常有效税筹划有效税筹划是正常有效税筹划有效税筹划是正常有效税筹划是正常有效的税收筹划，一般而言税收筹划是经营者可以理当获得相关经济活动所得到的收入。在整体规划管理资和...</p>
        <div class="bgBtn">
          <button>查看详情</button>
        </div>
      </li>
      <li class="caseItem">
        <div class="bg_img"><img src="" alt=""></div>
        <div class="itemTitle">节税和逃税区别在哪？</div>
        <p>合理合法的进行纳税筹划是正常有效税筹划是正常有效税筹划有效税筹划是正常有效税筹划有效税筹划是正常有效税筹划是正常有效的税收筹划，一般而言税收筹划是经营者可以理当获得相关经济活动所得到的收入。在整体规划管理资和...</p>
        <div class="bgBtn">
          <button>查看详情</button>
        </div>
      </li>
      <li class="caseItem">
        <div class="bg_img"><img src="" alt=""></div>
        <div class="itemTitle">节税和逃税区别在哪？</div>
        <p>合理合法的进行纳税筹划是正常有效税筹划是正常有效税筹划有效税筹划是正常有效税筹划有效税筹划是正常有效税筹划是正常有效的税收筹划，一般而言税收筹划是经营者可以理当获得相关经济活动所得到的收入。在整体规划管理资和...</p>
        <div class="bgBtn">
          <button>查看详情</button>
        </div>
      </li>
      <li class="caseItem">
        <div class="bg_img"><img src="" alt=""></div>
        <div class="itemTitle">节税和逃税区别在哪？</div>
        <p>合理合法的进行纳税筹划是正常有效税筹划是正常有效税筹划有效税筹划是正常有效税筹划有效税筹划是正常有效税筹划是正常有效的税收筹划，一般而言税收筹划是经营者可以理当获得相关经济活动所得到的收入。在整体规划管理资和...</p>
        <div class="bgBtn">
          <button>查看详情</button>
        </div>
      </li>
    </ul>
  </div>


  <!-- 底部 -->
  <div id="footer"></div>


  <!-- 侧边栏consultation资讯 -->
  <!--<div class="consultation">
    <div>
        <div class="consultation-title">立即预约咨询</div>
        <div class="consultation-item2 order">
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
        <div class="consultation-title">联系我们</div>
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
    &lt;!&ndash; 返回顶部 &ndash;&gt;
    <div class='goTop' id="goTop">
        <div><img src="/static/home/images/top@2x.png" alt=""></div>
        <div>顶部</div>
    </div>
</div>-->


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
      if ($('.chosenPage').length < 1) $('.nav ul li').eq(3).addClass('chosenPage')
      $('.chosenPage').addClass('nav-active')
    })
  })
</script>

</html>