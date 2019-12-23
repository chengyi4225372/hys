<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"C:\phpEnv\www\hys\public/../application/home\view\index\index.html";i:1577065895;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="renderer" content="webkit" />
  <meta name="force-rendering" content="webkit" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <script>
    /*@cc_on document.write('\x3Cscript id="_iealwn_js" src="https://support.dmeng.net/ie-alert-warning/latest.js">\x3C/script>'); @*/
  </script>
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="/static/home/css/base.css">
  <link rel="stylesheet" href="/static/home/css/footer.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400,500,700,900">
  <link rel="stylesheet" href="/static/assets/plugins/layui/css/layui.css">
  <link rel="stylesheet" href="/static/home/css/index.css">
  <link rel="stylesheet" href="/static/home/font/syht.css">
  <!-- <link rel="stylesheet" href="/static/home/font/SourceHanSansCN-Normal.css"> -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="/static/assets/plugins/layui/layui.all.js"></script>
  <script src="/static/home/js/clamp.js"></script>
  <script src='/static/home/js/index.js'></script>
  <script src="/static/common/js/open.js"></script>
  <script src='/static/home/js/footer.js'></script>

</head>

<body>

  <div class='container'>
    <!-- 导航部分 -->
    <div class="nav-box">
      <div class="w nav-container clearfix">
        <!-- logo图 -->
        <div class="logo clearfix">
          <a href="/">
          <img src="/static/home/images/logo.png" alt="">
          </a>
        </div>
        <!-- nav部分 -->
        <div class="nav">
          <ul class="clearfix">
            <li class="nav-active"><a href="/">首页</a></li>
            <li><a href="<?php echo url('/home/programme/productservice'); ?>"> 产品服务</a></li>
            <li><a href="<?php echo url('/home/programme/index'); ?>">行业解决方案</a></li>
            <li><a href="<?php echo url('/home/customer/index'); ?>">客户案例</a></li>
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

    <!-- 轮播图 -->

    <div class="layui-carousel" id="test1">
      <div carousel-item>
        <div><img style="width: 100%;" src="/static/home/images/homeBanner1.png" alt=""></div>
        <div><img style="width: 100%;" src="/static/home/images/homeBanner2.png" alt=""></div>
        <div><img style="width: 100%;" src="/static/home/images/homeBanner3.png" alt=""></div>
        <div><img style="width: 100%;" src="/static/home/images/homeBanner4.png" alt=""></div>
      </div>
    </div>



    <!-- 惠优税产品 -->
    <div class="preferential-box">
      <div class="w preferential-container clearfix">
        <div class="preferential-icon">
          <div></div>
          <div><span class="hysTitle">惠优税产品</span></div>
          <div>利用全国各地税收优惠政策，打造低税率洼地。金牌财税顾问团队，量身定制税筹方案！</div>
          <div onclick="alert_open()" class="getCase">获取解决方案</div>
        </div>
        <div class="preferential-content clearfix">
          <div class="preferential-content-item">
            <div class="preferential-content-item-img">
              <img src="/static/home/images/southeast@2x2.png" alt="">
            </div>
            <div class="preferential-content-item-content">
              <p>入驻型税筹产品</p>
              <p>·核定征收型·查账征收型·股权转让型</p>
              <p>为园区入驻的企业分别提供核定征收型、查账征收型、股权转让型三类科学纳税产品......</p>
            </div>
            <div class="preferential-content-item-more"><a href="<?php echo url('/home/programme/productservice'); ?>">了解具体方案</a>
            </div>
          </div>
          <div class="preferential-content-item">
            <div class="preferential-content-item-img">
              <img src="/static/home/images/southeast@2x.png" alt="">
            </div>
            <div class="preferential-content-item-content">
              <p>个人代报税产品</p>
              <p>·专业服务个人</p>
              <p>适用与企业产生业务的个人(例：包工头、个人设计师、私人承包者等)，惠优税资深财税专家团......</p>
            </div>
            <div class="preferential-content-item-more"><a href="<?php echo url('/home/programme/productservice'); ?>">了解具体方案</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 税务问题 -->
    <div class="taxproblems-box clearfix">
      <div class="taxproblems-left"><img src="/static/home/images/southeast (3)@2x.png" alt=""></div>
      <div class="taxproblems-right">
        <div></div>
        <div>
          <span class="taxIssues">

            您的企业是否存在以下税务问题
          </span>
        </div>
        <div class="taxproblems-right-img">
          <img src="/static/home/images/shuiwuwenti.png" alt="" class="active-img">
          <img src="/static/home/images/shuiwuwenti2.png" alt=""></div>
        <div class="taxproblems-right-page">
          <ul class="clearfix">
            <li class="leftBtn">
              <img src="/static/home/images/left.png" alt="" class="active-img">
              <img src="/static/home/images/left2.png" alt="">
            </li>
            <li><span class="active-page">1</span></li>
            <li><span>2</span></li>
            <li class="rightBtn">
              <img src="/static/home/images/right.png" alt="" class="active-img">
              <img src="/static/home/images/right2.png" alt="">
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- 税务筹划解决方案 -->

    <div class="tax-planning-solutions-box">
      <div class="w tax-planning-solutions">
        <div></div>
        <div><span class="caseTitle">税务筹划解决方案</span>
        </div>
        <div class="tax-planning-solutions-contents">
          <div class="tax-planning-solutions-content-one clearfix">

            <div class="content-active content-active-shade tax-planning-solutions-content-item">
              <div class="plan-text">筹划方案</div>
              <div class="tax-planning-solutions-content-img"></div>
              <div class="tax-planning-solutions-content-text">
                <p>投资收益型</p>
                <p>股权转让，投资收益20%个税，如何优化？</p>
              </div>
              <div class="tax-planning-solutions-content-btn">
                分红个税
              </div>
              <div class="tax-planning-solutions-content-btn2" onclick="alert_open()">
                <a href="javascript:;">获取分红个税筹划方案</a>
              </div>
            </div>

            <div class="tax-planning-solutions-content-item">
              <div class="plan-text">筹划方案</div>

              <div class="tax-planning-solutions-content-img"></div>
              <div class="tax-planning-solutions-content-text">
                <p>工资收入型</p>
                <p>个人所得税太高，员工工资低，怎么办？</p>
              </div>
              <div class="tax-planning-solutions-content-btn">
                个人所得税
              </div>
              <div class="tax-planning-solutions-content-btn2" onclick="alert_open()">
                <a href="javascript:;">获取个人所得税筹划方案</a>
              </div>
            </div>
            <div class="tax-planning-solutions-content-item">
              <div class="plan-text">筹划方案</div>

              <div class="tax-planning-solutions-content-img"></div>
              <div class="tax-planning-solutions-content-text">
                <p>企业利润型</p>
                <p>企业所得税太高，缺少成本发票，怎么办？</p>
              </div>
              <div class="tax-planning-solutions-content-btn">
                企业所得税
              </div>
              <div class="tax-planning-solutions-content-btn2" onclick="alert_open()">
                <a href="javascript:;">获取企业所得税筹划方案</a>
              </div>
            </div>
          </div>
          <div class="tax-planning-solutions-content-two clearfix">
            <div class="tax-planning-solutions-content-item">
              <div class="plan-text">筹划方案</div>
              <div class="tax-planning-solutions-content-img"></div>
              <div class="tax-planning-solutions-content-text">
                <p>劳务收入型</p>
                <p>自由职业者，劳务个税太高，如何平衡？</p>
              </div>
              <div class="tax-planning-solutions-content-btn">
                个人所得税
              </div>
              <div class="tax-planning-solutions-content-btn2" onclick="alert_open()">
                <a href="javascript:;">获取个人所得税筹划方案</a>
              </div>
            </div>
            <div class="tax-planning-solutions-content-item">
              <div class="plan-text">筹划方案</div>
              <div class="tax-planning-solutions-content-img"></div>
              <div class="tax-planning-solutions-content-text">
                <p>贸易采购型</p>
                <p>货物采购无法获取发票，企业所得税太高，怎么办？</p>
              </div>
              <div class="tax-planning-solutions-content-btn">
                企业所得税
              </div>
              <div class="tax-planning-solutions-content-btn2" onclick="alert_open()">
                <a href="javascript:;">获取企业所得税筹划方案</a>
              </div>
            </div>
            <div class="content-active tax-planning-solutions-content-item">
              <div class="plan-text">筹划方案</div>
              <div class="tax-planning-solutions-content-img"></div>
              <div class="tax-planning-solutions-content-text">
                <p>双软产业型</p>
                <p>增值税太高，企业税负重，如何解决？</p>
              </div>
              <div class="tax-planning-solutions-content-btn">
                增值税
              </div>
              <div class="tax-planning-solutions-content-btn2" onclick="alert_open()">
                <a href="javascript:;">获取增值税筹划方案</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 惠优税优势 -->
    <div class="preferential-taxadvantage-box">
      <div class="w preferential-taxadvantage">
        <div></div>
        <div>
          <span class="advanTitle">惠优税优势</span>
        </div>
        <div class="preferential-taxadvantage-content">
          <div class="preferential-taxadvantage-content-icon">
            <ul class="clearfix">
              <li id="0" class="fousess"></li>
              <li id="1"></li>
              <li id="2"></li>
            </ul>
          </div>
          <div class="preferential-taxadvantage-content-title ptct-active">
            我们已得到了北京、上海、江苏、湖北、江西、河南、青海等各地政府的大力支持，在全国范围内设立多个园区</div>
          <div class="preferential-taxadvantage-content-imgs">
            <ul class="clearfix">
              <?php if(is_array($chart) || $chart instanceof \think\Collection || $chart instanceof \think\Paginator): $i = 0; $__LIST__ = $chart;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
              <li><img src="<?php echo $vo['imgs']; ?>" alt=""></li>
              <?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
            <span class="fouse-left" title="1"><img src="/static/home/images/focus-left.png" alt=""></span>
            <span class="fouse-right" title="0"><img src="/static/home/images/focus-right.png" alt=""></span>
          </div>
        </div>
      </div>
    </div>


    <!-- 精选园区 -->
    <div class="selected-park-box">
      <div class="w selected-park">
        <div></div>
        <div>
          <span class="partTitle">惠优税精选园区</span>

        </div>
        <div class="map-box">
          <div class="map-box-left">
            <div><img src="/static/home/images/jinxuanyuanqu1.png" alt=""></div>
            <div><img src="/static/home/images/jinxuanyuanqu2.png" alt=""></div>
            <div><img src="/static/home/images/jinxuanyuanqu3.png" alt=""></div>
          </div>
          <div class="map-box-center">
            <div class="map-box-center-item active-map">
              <img src="/static/home/images/map1.gif" alt="">
            </div>
            <div class="map-box-center-item">
              <img src="/static/home/images/map2.gif" alt="">

            </div>
            <div class="map-box-center-item">
              <img src="/static/home/images/map3.gif" alt="">

            </div>
            <div class="map-box-center-item">
              <img src="/static/home/images/map4.gif" alt="">

            </div>
            <div class="map-box-center-item">
              <img src="/static/home/images/map5.gif" alt="">
            </div>
          </div>
          <div class="map-box-right">
            <div class="map-box-right-yuanqu-item active-map">
              <div>青海园区</div>
              <div>湖南园区</div>
              <div>湖北园区</div>
              <div>山东园区</div>
            </div>
            <div class="map-box-right-yuanqu-item">
              <div>广东园区</div>
              <div>上海园区</div>
              <div>浙江园区</div>
              <div>江西园区</div>
            </div>
            <div class="map-box-right-yuanqu-item">
              <div>福建园区</div>
              <div>四川园区</div>
              <div>湖北园区</div>
              <div>河北园区</div>
            </div>
            <div class="map-box-right-yuanqu-item">
              <div>上海园区</div>
              <div>重庆园区</div>
              <div>深圳园区</div>
              <div>安徽园区</div>
            </div>
            <div class="map-box-right-yuanqu-item">
              <div>北京园区</div>
              <div>江苏园区</div>
              <div>深圳园区</div>
              <div>青海园区</div>
            </div>
            <div class="map-box-right-morebtn">换一批</div>
          </div>
        </div>
      </div>
    </div>


    <!-- 合作伙伴 -->
    <div class="partner-box">
      <div class="w partner">
        <div class="partner-title">
          <div class="modified-line"></div>
          <div class="partner-title-box">
            <span class="coTitle">合作伙伴</span>
          </div>
        </div>
        <div class="partner-img">
          <img src="/static/home/images/hezuohuoban2x.png" alt="">
        </div>
      </div>
    </div>


    <!-- 底部 -->
    <div id="footer"></div>



    <!-- 侧边栏consultation资讯 -->
    <div class="consultation">
      <div>
        <div class="consultation-title">惠家族产品</div>
        <div class="consultation-item">
          <ul>
            <!-- <li><a href="/">惠优税</a></li>
            <li><a href="<?php echo config('curl.hlg'); ?>">惠灵工</a></li>
            <li><a href="<?php echo config('curl.hdx'); ?>">惠多薪</a></li>
            <li><a href="<?php echo url('/home/searches/index'); ?>">惠找事</a></li>
            <li><a href="<?php echo config('curl.hcy'); ?>">惠创业</a></li>
            <li><a href="<?php echo config('curl.hqd'); ?>">惠企动</a></li> -->
            <li><a href="<?php echo config('curl.website'); ?>">惠企云</a></li>
            <li><a href="/">惠优税</a><a href="<?php echo config('curl.hlg'); ?>">惠灵工</a></li>
            <li><a href="javascript:;">惠多薪</a><a href="javascript:;">惠找事</a></li>
            <li><a href="javascript:;">惠创业</a><a href="javascript:;">惠启动</a></li>
          </ul>
        </div>
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


  </div>

</body>
<script>
  /* 头部导航切换 */
  $(function () {
    $('.nav ul li').on('click', function () {
      $(this).addClass('nav-active chosenPage').siblings().removeClass('nav-active chosenPage')
    })
    $('.nav ul li').on('mouseenter', function () {
      $(this).addClass('nav-active').siblings().removeClass('nav-active')
    })
    $('.nav').on('mouseleave', function () {
      $('.nav ul li').removeClass('nav-active')
      if ($('.chosenPage').length < 1) $('.nav ul li').eq(0).addClass('chosenPage')
      $('.chosenPage').addClass('nav-active')
    })

    /* 轮播图 */
    layui.use('carousel', function () {
      var carousel = layui.carousel;
      //建造实例
      carousel.render({
        elem: '#test1',
        width: '100%', //设置容器宽度
        arrow: 'hover', //始终显示箭头
        height: '46rem',
        trigger: 'hover',
        interval: 3000,
        autoplay: true
        //,anim: 'updown' //切换动画方式
      });
    });

  })
</script>

</html>