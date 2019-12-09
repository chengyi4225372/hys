<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"C:\phpEnv\www\hys\public/../application/home\view\programme\productservice.html";i:1575614378;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/static/home/css/base.css">
    <link rel="stylesheet" href="/static/home/css/index.css">
    <link rel="stylesheet" href="/static/home/css/productservice.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="/static/assets/plugins/layui/layui.all.js"></script>
    <script src="/static/home/js/productservice.js"></script>
    <script src="/static/common/js/open.js"></script>
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
                        <li class="nav-active"><a href="<?php echo url('/home/programme/productservice'); ?>"> 产品服务</a></li>
                        <li><a href="<?php echo url('/home/programme/index'); ?>">行业解决方案</a></li>
                        <li><a href="<?php echo url('/home/customer/index'); ?>">客户案例</a></li>
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

        <!-- banner图 -->
        <div class='header-box'></div>

        <!-- 面包屑 -->
        <div class="w bread">
            <a href="/">首页</a>
            <span>&gt;</span>
            <span class="current">产品服务</span>
        </div>

        <!-- 内容区 -->
        <div class="w content">
            <div class="series">
                <img src="/static/home/images/series.png" alt="">
                <img src="/static/home/images/product.png" alt="">
                <img src="/static/home/images/caseA.png" alt="">
                <img src="/static/home/images/caseB.png" alt="">
                <img src="/static/home/images/step.png" alt="">
                <img src="/static/home/images/scene.png" alt="">
                <img src="/static/home/images/advantage.png" alt="">
                <img src="/static/home/images/afterSales.png" alt="">
                <button class="btn1" onclick="alert_open()">立即咨询</button>
                <button class="btn2" onclick="alert_open()">立即咨询</button>
                <button class="btn3" onclick="alert_open()">在线咨询</button>
            </div>
        </div>

    </div>


    <!-- 底部 -->
    <div class="fotter-box">
        <div class="w fotter">
            <div class='parter_catefories'>
                <dl>
                    <dt><a href="javascript:;">服务产品</a></dt>
                    <dd><a href="javascript:;">服务型税筹</a></dd>
                    <dd><a href="javascript:;">门户型税筹</a></dd>
                    <dd><a href="javascript:;">人力资源</a></dd>
                </dl>
                <dl>
                    <dt><a href="javascript:;">招商政策</a></dt>
                    <dd><a href="javascript:;">招商政策网</a></dd>
                </dl>
                <dl>
                    <dt><a href="javascript:;">合作</a></dt>
                    <dd><a href="javascript:;">代理合作</a></dd>
                </dl>
                <dl>
                    <dt><a href="javascript:;">公司信息</a></dt>
                    <dd><a href="javascript:;">瑟维斯有限公司</a></dd>
                    <dd><a href="javascript:;">惠创优产业联盟</a></dd>
                    <dd><a href="javascript:;">中兴瑞华有限公司</a></dd>
                </dl>
                <dl>
                    <dt><a href="javascript:;">联系我们</a></dt>
                    <dd><a href="javascript:;">400-150-9896</a></dd>
                    <dd><a href="javascript:;">hcylm008@dingtalk.com</a></dd>
                    <dd><a href="javascript:;">武汉市硚口区南国大武汉H座18楼</a></dd>
                </dl>

            </div>
            <div class='concat_icon clearfix'>
                <div><img src="/static/home/images/bo.png" alt=""></div>
                <div><img src="/static/home/images/wx.png" alt=""></div>
                <div><img src="/static/home/images/tie.png" alt=""></div>
            </div>
            <div class="fotter-line"></div>
            <div>© Copyright 2019 惠企动（湖北）科技有限公司 . All Rights Reserved</div>
        </div>
    </div>

    <!-- 侧边栏bottom资讯 -->
    <div class="bottom">
        <div>
            <div class="bottom-title">回到首页</div>
            <!-- <div class="bottom-item2 order">
                <div>
                    <p>专家服务电话</p>
                    <p>181-8619-4461</p>
                </div>
                <div>
                    <p>获取税筹方案</p>
                    <p>400-150-9898</p>
                </div>
            </div> -->
        </div>
        <div>
            <div class="bottom-title2">联系我们</div>
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

    <!-- 弹框 -->
    <div class="pop-up-box" id="popbox">
        <div class="form">
            <div class="form-titile">
                <p>方案咨询</p>
                <span class="turnoff" onclick="hide_open()"></span>
            </div>
            <div class="form-content">
                <div><span class="title">您的姓名</span>
                    <input type="text" id="contactName" placeholder="请输您的姓名"></div>
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
    })

</script>

</html>