<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"/opt/web/hys/public/../application/home/view/index/index.html";i:1581404695;s:53:"/opt/web/hys/application/home/view/common/header.html";i:1580963987;s:53:"/opt/web/hys/application/home/view/common/footer.html";i:1580963986;}*/ ?>
<!DOCTYPE html>
<html>

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
  <meta name="keyword" content="企业税收筹划,纳税筹划,园区税务筹划,政府园区税务筹划,个人避税,合理节税,节税筹划,合理避税,股权转让避税,惠优税">
  <meta name="description" content="惠优税利用最安全、高效、合理的节税措施解决税务难题,打造全国地方政府园区联盟式星级服务新典范和园企共同发展大平台。">
  <!-- <link rel="stylesheet" href="/static/home/font/SourceHanSansCN-Normal.css"> -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="/static/assets/plugins/layui/layui.all.js"></script>
  <script src="/static/home/js/clamp.js"></script>
  <script src='/static/home/js/index.js'></script>
  <script src='/static/home/js/lazysizes.min.js' async='async'></script>
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

  <div class='container'>

    <!-- 头部导航 -->
<div id="header" data-pageId="0">
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
          <div onclick="alert_open('惠优税首页','产品获取方案')" class="getCase">获取解决方案</div>
        </div>
        <div class="preferential-content clearfix">
          <div class="preferential-content-item">
            <div class="preferential-content-item-img">
              <img class="lazyload" data-src="/static/home/images/southeast@2x2.png" alt="">
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
              <img class="lazyload" data-src="/static/home/images/southeast@2x.png" alt="">
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
      <div class="taxproblems-left"><img class="lazyload" data-src="/static/home/images/southeast (3)@2x.png" alt=""></div>
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
              <li><img class="lazyload" data-src="<?php echo $vo['imgs']; ?>" alt=""></li>
              <?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
            <span class="fouse-left" title="1"><img class="lazyload" data-src="/static/home/images/focus-left.png" alt=""></span>
            <span class="fouse-right" title="0"><img class="lazyload" data-src="/static/home/images/focus-right.png" alt=""></span>
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
            <div><img class="lazyload" data-src="/static/home/images/jinxuanyuanqu1.png" alt=""></div>
            <div><img class="lazyload" data-src="/static/home/images/jinxuanyuanqu2.png" alt=""></div>
            <div><img class="lazyload" data-src="/static/home/images/jinxuanyuanqu3.png" alt=""></div>
          </div>
          <div class="map-box-center">
            <div class="map-box-center-item active-map">
              <img class="lazyload" data-src="/static/home/images/map1.gif" alt="">
            </div>
            <div class="map-box-center-item">
              <img class="lazyload" data-src="/static/home/images/map2.gif" alt="">

            </div>
            <div class="map-box-center-item">
              <img class="lazyload" data-src="/static/home/images/map3.gif" alt="">

            </div>
            <div class="map-box-center-item">
              <img class="lazyload" data-src="/static/home/images/map4.gif" alt="">

            </div>
            <div class="map-box-center-item">
              <img class="lazyload" data-src="/static/home/images/map5.gif" alt="">
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
          <img class="lazyload" data-src="/static/home/images/hezuohuoban2x.png" alt="">
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
            <li><a href="javascript:;">惠创业</a><a href="javascript:;">惠企动</a></li>
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
        <div><img class="lazyload" data-src="/static/home/images/top@2x.png" alt=""></div>
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
          <input type='hidden' id='identifications' value='惠优税'>
          <input type='hidden' id='sources' value='企业税筹'>
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
 
  $(function () {
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