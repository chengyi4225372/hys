<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"/opt/web/hys/public/../application/home/view/industry/index.html";i:1581413238;s:53:"/opt/web/hys/application/home/view/common/header.html";i:1580963987;s:53:"/opt/web/hys/application/home/view/common/footer.html";i:1580963986;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit" />
    <meta name="force-rendering" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script>/*@cc_on document.write('\x3Cscript id="_iealwn_js" src="https://support.dmeng.net/ie-alert-warning/latest.js">\x3C/script>'); @*/</script>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo $title; ?></title>
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
    <script src="https://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/static/home/css/base.css">
    <link rel="stylesheet" href="/static/home/css/news.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400,500,700,900">
    <link rel="stylesheet" href="/static/home/css/footer.css">
    <meta name="keyword" content="财税行业资讯,节税资讯,税务筹划资讯,财税行业新闻,节税新闻,税务筹划新闻,惠优税">
    <meta name="description" content="惠优税新闻资讯是包含海量财税行业资讯的新闻服务平台,反映各行各业的财税新闻热点,热门财税话题、财税人物动态、财税产品资讯等,快速了解财税行业的最新进展。">
    <script src="/static/assets/plugins/layui/layui.all.js"></script>
    <script src='/static/common/js/common.js'></script>
    <script src='/static/common/js/index.js'></script>
    <script src='/static/common/js/public.js'></script>
    <script src='/static/home/js/industry.js'></script>
    <script src="/static/common/js/open.js"></script>
    <script src='/static/home/js/lazysizes.min.js' async='async'></script>

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
        <div id="header" data-pageId="4">
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
    </div>



    <!-- <div class="bg_banner">
        <div class="banner">

            <img src="<?php echo $banner['imgs']; ?>" alt="">
        </div>
    </div> -->

    <!-- 头部 -->
    <div class='header-box'></div>


    <!-- 面包屑导航 -->
    <div class="bg_breadCrumbs">
        <div class="w bread-crumbs">
            <span><a href="<?php echo url('/home/index/index'); ?>">首页</a></span> >
            <span><a class="current" style="color:#E8341E;" onclick="go_news(this)"
                    data-url="<?php echo url('/home/industry/index'); ?>">新闻资讯</a></span> <span></span>
        </div>
    </div>

    <!-- 信息列表 -->
    <div class="content-box">
        <div class="w content">

            <div class="information-list">
                <div class="tabs clearfix">
                    <!-- <ul class="clearfix fl">
                      <li class="li-active">招商政策</li>
                      <li>招标信息</li>
                    </ul> -->
                    <div class="govPolicy fl">新闻资讯</div>

                </div>

                <!-- 热搜 -->
                <div class="hotWord">
                    <div class="bgHot">
                        <span>热门关键词</span>
                        <ul>
                            <?php if(is_array($keywords) || $keywords instanceof \think\Collection || $keywords instanceof \think\Paginator): $i = 0; $__LIST__ = $keywords;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li onclick="hotsearch(this);" data-title="<?php echo $vo['title']; ?>"
                                data-url="<?php echo url('/home/industry/newsapi'); ?>" data-href="<?php echo url('/home/industry/infos'); ?>">
                                <span><?php echo $vo['title']; ?></span>
                                <span class="close" onclick="nullhot(this);"
                                      data-title="<?php echo $vo['title']; ?>"   data-url="<?php echo url('/home/industry/newsapi'); ?>">✕</span>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>

                    <div class="search-box">
                        <input type="text" id="keyword" value="<?php echo \think\Request::instance()->get('keyword'); ?>" placeholder="请输入关键字">
                        <div id="searched" style="cursor:pointer;" data-url="<?php echo url('/home/industry/index'); ?>">搜索</div>
                    </div>

                </div>

                <div class="bg_divide">

                    <div class="divide"></div>
                </div>


                <div class="tabs-items show">
                    <ul id="shang">
                        <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <li>
                            <div class="tabs-items-content">
                                <div class="tabs-items-content-text figcaption">
                                    <p>抱歉，没有找到与<b style="color: #ff2222"><?php echo \think\Request::instance()->get('keyword'); ?></b>的相关结果。</p>
                                </div>
                            </div>
                        </li>
                        <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="javascript:;" data-url="<?php echo url('/home/industry/infos',['mid' =>$lo['id']]); ?>"
                                login_url="<?php echo $baseurl; ?>"
                                loca_url="<?php echo config('curl.website'); ?>/home/index/getInfo?mid=<?php echo $lo['id']; ?>"
                                mobile-phone="<?php echo $userinfo['mobile']; ?>" data-id="<?php echo $lo['id']; ?>"
                                onclick="home_module.show_detail(this)">
                                <div class="infoItem">
                                    <div class="infoLeft">
                                        <img class="lazyload" data-src="<?php echo !empty($lo['imgs'])?$lo['imgs']:'/static/home/images/infoItem.jpg'; ?>" alt="">
                                    </div>

                                    <div class="infoRight">
                                        <div class="rightTop">
                                            <div class="itemTitle"><?php echo $lo['title']; ?></div>
                                            <span class="itemTime">
                                                <img class="lazyload" data-src="/static/home/images/shijian2x.png"
                                                    alt=""><span><?php echo $lo['create_time']; ?></span>
                                            </span>
                                        </div>
                                        <p>
                                            <?php echo mb_substr($lo['description'],'0','45','utf-8'); ?>
                                        </p>
                                    </div>

                                </div>
                            </a>
                            <ul class="tags">
                                <?php if(empty($lo['keywords']) || (($lo['keywords'] instanceof \think\Collection || $lo['keywords'] instanceof \think\Paginator ) && $lo['keywords']->isEmpty())): else: if(is_array($lo['keywords']) || $lo['keywords'] instanceof \think\Collection || $lo['keywords'] instanceof \think\Paginator): if( count($lo['keywords'])==0 ) : echo "" ;else: foreach($lo['keywords'] as $k=>$key): ?>
                                <li><?php echo $key; ?></li>
                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                            </ul>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>

                    </ul>
                    <input type="hidden" id="sid" value="<?php echo \think\Request::instance()->get('keyword'); ?>">
                </div>

            </div>
        </div>
    </div>
    <!-- 分页 -->
    <div class="pageNation">
        <!--                <ul class="page">-->
        <!--                    <li class="prev">上一页</li>-->
        <!--                    <li class="currentPage">1</li>-->
        <!--                    <li>2</li>-->
        <!--                    <li class="next">下一页</li>-->
        <!--                </ul>-->
        
        <?php echo $list->render(); ?>
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
          <div class="consultation-title" onclick="alert_open('惠优税新闻资讯','右导航')">咨询方案</div>
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

</body>

</html>