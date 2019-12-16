<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"C:\phpEnv\www\hys\public/../application/home\view\customer\index.html";i:1576500553;}*/ ?>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="/static/home/css/base.css">
    <link rel="stylesheet" href="/static/home/css/news.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:100,300,400,500,700,900">
    <!--    <script src="/static/spirit/js/clamp.js"></script>-->
    <script src="/static/assets/plugins/layui/layui.all.js"></script>
    <script src='/static/common/js/common.js'></script>
    <script src='/static/common/js/index.js'></script>
    <script src='/static/common/js/public.js'></script>
    <script src='/static/home/js/industry.js'></script>
</head>

<body>

    <div class='container'>

        <!-- 导航部分 -->
        <!-- <div class='header'>
            <div class=header_content>
                <div class='logo'>
                    <a href="<?php echo url('/home/index/index'); ?>">
                        <img src="/static/home/images/logo.png" alt="">
                        <h1>惠优税</h1>
                    </a>
                </div>
                <ul class='titile'>
                    <li><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>
                    <li><a href="<?php echo url('/home/optimal/index'); ?>">产品服务</a>
                    </li>
                    <li>
                        <a href="<?php echo url('/home/programme/index'); ?>">行业解决方案</a>
                    </li>
                    <li><a href="<?php echo url('/home/customer/index'); ?>">客户 案例</a></li>
                    <li class='nav-active'><a href="<?php echo url('/home/industry/index'); ?>">行业新闻资讯</a></li>
                    <li><a href="javascript:;">会员通道</a></li> -->
        <!-- <li><a href="<?php echo url('/home/launch/index'); ?>">惠启动</a></li> -->
        <!-- </ul>
                <?php if(empty($userinfo['mobile'])): ?>
                <div class='register'>
                    <a href="javascript:void(0)" login_url="<?php echo $baseurl; ?>" loca_url="<?php echo config('curl.website'); ?>"
                        onclick="login_btn(this)">登录</a>
                    <a href="<?php echo url('/home/login/register'); ?>">注册</a>
                </div>
                <?php else: ?>
                <div class="u_info">
                    <img src="/static/home/images/user_img.png" style="width:30px;height:30px; vertical-align: middle;">
                    <p style="display:inline-block;color:#fff;" id="mobile_phone"><?php echo $userinfo['mobile']; ?></p>

                    <div class="u_info_content" id="u_info_content">
                        <a class="u_out" href="javascript:void(0)" data-token="<?php echo $userinfo['token']; ?>"
                            onclick="user_logout(this)" location_url="<?php echo url('/home/index/index'); ?>"
                            data-url="<?php echo url('/home/login/logout'); ?>">退出账号</a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div> -->

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
                        <li><a href="<?php echo url('/home/index/index'); ?>">首页</a></li>
                        <li><a href="<?php echo url('/home/programme/productservice'); ?>"> 产品服务</a></li>
                        <li><a href="<?php echo url('/home/programme/index'); ?>">行业解决方案</a></li>
                        <li><a href="<?php echo url('/home/customer/index'); ?>">客户案例</a></li>
                        <li class="nav-active"><a href="<?php echo url('home/industry/index'); ?>">行业新闻资讯</a></li>
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

    </div>



    

        <!-- 头部 -->
        <div class='header-box'></div>


    <!-- 面包屑导航 -->
    <div class="w bg_breadCrumbs">
        <div class="bread-crumbs">
            <span><a href="<?php echo url('/home/index/index'); ?>">首页</a></span> >
            <span><a class="current" style="color:#E8341E;" onclick="go_news(this)"
                    data-url="<?php echo url('/home/industry/index'); ?>">行业新闻资讯</a></span> <span></span>
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
                    <div class="govPolicy fl">行业资讯</div>
                    <div class="search-box fr">
                        <input type="text" id="keyword" value="<?php echo \think\Request::instance()->get('keyword'); ?>" placeholder="请输入关键字">
                        <div id="searched" style="cursor:pointer;" data-url="<?php echo url('/home/industry/index'); ?>">搜索
                        </div>
                    </div>
                </div>

                <!-- 热搜 -->
                <div class="m hotWord">
                    <ul>
                        <li style="cursor:pointer;" data-url="<?php echo url('/home/industry/index'); ?>"
                            onclick="location.href=$(this).attr('data-url')">
                            <span>热门关键词</span>
                        </li>
                        <!-- <?php if(is_array($keywords) || $keywords instanceof \think\Collection || $keywords instanceof \think\Paginator): $i = 0; $__LIST__ = $keywords;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li onclick="hotsearch(this);" data-title="<?php echo $vo['title']; ?>"
                            data-url="<?php echo url('/home/industry/index'); ?>">
                            <span><?php echo $vo['title']; ?></span>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?> -->
                        <?php if(is_array($keywords) || $keywords instanceof \think\Collection || $keywords instanceof \think\Paginator): $i = 0; $__LIST__ = $keywords;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li <?php if(\think\Request::instance()->get('title') == $vo['title']): ?> class="hotwords" <?php endif; ?>>

                            <span onclick="hotsearch(this);" data-title="<?php echo $vo['title']; ?>"  data-url="<?php echo url('/home/industry/index'); ?>"><?php echo $vo['title']; ?></span>

                            <span class="close" onclick="window.location.href=$(this).attr('data-url')"  data-url="<?php echo url('/home/industry/index'); ?>">✕</span>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>

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
                                        <img src="<?php echo !empty($lo['imgs'])?$lo['imgs']:'/static/home/images/infoItem.jpg'; ?>" alt="">
                                    </div>

                                    <div class="infoRight">
                                        <div class="rightTop">
                                            <div class="itemTitle"><?php echo $lo['title']; ?></div>
                                            <span class="itemTime">
                                                <img src="/static/home/images/shijian2x.png"
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
                                <li onclick="hotsearch(this)" data-title="<?php echo $key; ?>"
                                    data-url="<?php echo url('/home/industry/index'); ?>"><?php echo $key; ?></li>
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
 

    <!-- 返回顶部 -->
    <div class='goTop' id="goTop">
        <i></i>
        <div>返回顶部</div>
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