<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"C:\phpEnv\www\hys\public/../application/home\view\index\index.html";i:1575356266;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="/static/home/css/base.css">
  <link rel="stylesheet" href="/static/home/css/index.css">
  <script src="/static/home/js/clamp.js"></script>
  <script src='/static/home/js/index.js'></script>
</head>

<body>

  <div class='container'>

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
            <li class="nav-active"><a href="#">首页</a></li>
            <li><a href="#"> 产品服务</a></li>
            <li><a href="#">行业解决方案</a></li>
            <li><a href="#">客户案例</a></li>
            <li><a href="#">新闻资讯</a></li>
            <li><a href="<?php echo url('home/industry/index'); ?>">行业资讯</a></li>
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
        <div class="user-icon-box">
          <img class="user-icon" src="/static/home/images/icon.png" alt="">
          <span class="phone">133****5674</span>
          <div class="login-out">
            <ul>
              <li><a href="">退出登录</a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <!-- 头部 -->
    <div class='header-box'></div>

    <!-- 惠优税产品 -->
    <div class="preferential-box">
      <div class="w preferential-container clearfix">
        <div class="preferential-icon">
          <div></div>
          <div>惠优税产品</div>
          <div>为您企税降成本 、薪税降税负 、 分红降扣率 、创业降个税。</div>
          <div>获取解决方案</div>
        </div>
        <div class="preferential-content clearfix">
          <div class="preferential-content-item">
            <div class="preferential-content-item-img">
              <img src="/static/home/images/southeast@2x2.png" alt="">
            </div>
            <div class="preferential-content-item-content">
              <p>入驻型税筹产品</p>
              <p>·核定征收型·查账征收型·股权转让型</p>
              <p>根据企业实际，为园区入驻的企业分别提供具体三大科学纳税产品...</p>
            </div>
            <div class="preferential-content-item-more"><a href="#">了解具体方案</a></div>
          </div>
          <div class="preferential-content-item">
            <div class="preferential-content-item-img">
              <img src="/static/home/images/southeast@2x.png" alt="">
            </div>
            <div class="preferential-content-item-content">
              <p>个人代报税产品</p>
              <p>·专业服务个人</p>
              <p>服务企业产生业务的个人<br />可服务对象：包工头、个人设计师、私人承包人等...</p>
            </div>
            <div class="preferential-content-item-more"><a href="#">了解具体方案</a></div>
          </div>
        </div>
      </div>
    </div>

    <!-- 税务问题 -->
    <div class="taxproblems-box clearfix">
      <div class="taxproblems-left"><img src="/static/home/images/southeast (3)@2x.png" alt=""></div>
      <div class="taxproblems-right">
        <div></div>
        <div>您的企业是否存在以下税务问题
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
        <div>税务筹划解决方案</div>
        <div class="tax-planning-solutions-contents">
          <div class="tax-planning-solutions-content-one clearfix">
            <div class="content-active tax-planning-solutions-content-item">
              <div class="plan-text">筹划方案</div>
              <div class="tax-planning-solutions-content-img"></div>
              <div class="tax-planning-solutions-content-text">
                <p>投资收益型</p>
                <p>股权转让，投资收益20%个税，如何优化？</p>
              </div>
              <div class="tax-planning-solutions-content-btn">
                分红个税
              </div>
              <div class="tax-planning-solutions-content-btn2">
                <a href="#">获取分红个税筹划方案</a>
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
              <div class="tax-planning-solutions-content-btn2">
                <a href="#">获取个人所得税筹划方案</a>
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
              <div class="tax-planning-solutions-content-btn2">
                <a href="#">获取企业所得税筹划方案</a>
              </div>
            </div>
          </div>
          <div class="tax-planning-solutions-content-two clearfix">
            <div class="tax-planning-solutions-content-item">
              <div class="plan-text">筹划方案</div>
              <div class="tax-planning-solutions-content-img"></div>
              <div class="tax-planning-solutions-content-text">
                <p>劳务收入型</p>
                <p>个人所得税太高,员工工资低...</p>
              </div>
              <div class="tax-planning-solutions-content-btn">
                个人所得税
              </div>
              <div class="tax-planning-solutions-content-btn2">
                <a href="#">获取个人所得税筹划方案</a>
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
              <div class="tax-planning-solutions-content-btn2">
                <a href="#">获取企业所得税筹划方案</a>
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
              <div class="tax-planning-solutions-content-btn2">
                <a href="#">获取增值税筹划方案</a>
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
        <div>惠优税优势</div>
        <div class="preferential-taxadvantage-content">
          <div class="preferential-taxadvantage-content-icon">
            <ul class="clearfix">
              <li class="fousess"></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="preferential-taxadvantage-content-title">我们得到了上海、安徽、江西、湖北等各地政府的大力支持，在全国各地有个多个园区</div>
          <div class="preferential-taxadvantage-content-imgs">
            <ul class="clearfix">
              <li><img src="/static/home/images/fouse1.png" alt=""></li>
              <li><img src="/static/home/images/fouse2.png" alt=""></li>
              <li><img src="/static/home/images/fouse3.png" alt=""></li>
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
        <div>惠优税精选园区</div>
        <div class="map-box">
          <div class="map-box-left">
            <div><img src="/static/home/images/jinxuanyuanqu1.png" alt=""></div>
            <div><img src="/static/home/images/jingxuanyuanqu2.png" alt=""></div>
            <div><img src="/static/home/images/jingxuanyuanqu3.png" alt=""></div>
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
              <div>青海</div>
              <div>湖南</div>
              <div>湖北</div>
              <div>山东</div>
            </div>
            <div class="map-box-right-yuanqu-item">
              <div>广东</div>
              <div>上海</div>
              <div>浙江</div>
              <div>江西</div>
            </div>
            <div class="map-box-right-yuanqu-item">
              <div>福建</div>
              <div>四川</div>
              <div>湖北</div>
              <div>河北</div>
            </div>
            <div class="map-box-right-yuanqu-item">
              <div>上海</div>
              <div>重庆</div>
              <div>深圳</div>
              <div>安徽</div>
            </div>
            <div class="map-box-right-yuanqu-item">
              <div>北京</div>
              <div>江苏</div>
              <div>深圳</div>
              <div>青海</div>
            </div>
            <div class="map-box-right-morebtn">换一批</div>
          </div>

        </div>

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
          <span>合作伙伴</span>
        </div>
      </div>
      <div class="partner-img">
        <img src="/static/home/images/hezuohuoban2x.png" alt="">
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
      <div class="bottom-title">惠家族产品</div>
      <div class="bottom-item">
        <ul>
          <li><a href="#">惠优税</a></li>
          <li><a href="#">惠灵工</a></li>
          <li><a href="#">惠多薪</a></li>
          <li><a href="#">惠找事</a></li>
          <li><a href="#">惠创业</a></li>
          <li><a href="#">惠企动</a></li>
        </ul>
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


  </div>

</body>

</html>