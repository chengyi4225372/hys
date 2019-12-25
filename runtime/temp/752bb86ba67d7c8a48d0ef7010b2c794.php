<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:107:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\hys\public/../application/home\view\common\header.html";i:1577263984;}*/ ?>
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