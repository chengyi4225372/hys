<?php
namespace app\home\controller;

use app\common\controller\BaseController;
use app\v1\service\Chartservice;
use app\v1\service\Taxationservice;
use think\Controller;
use app\v1\service\Systems;
use think\Cookie;
use think\Cache;
class Index extends BaseController
{

    public function index()
    {

        if ($this->request->isGet()) {
            //轮播图
            $chart = Chartservice::instance()->getList();
            $this->assign('chart',$chart);
            //用户信息
            $this->assign('userinfo',$this->userinfo);
            $this->assign('title','园区企业税收筹划_合理避税_个人所得税筹划平台-惠优税');
            return $this->fetch();
        }
        return false;
    }
}