<?php
namespace app\home\controller;

use app\common\controller\BaseController;
<<<<<<< HEAD
use app\v1\service\Taxationservice;
=======
use app\v1\service\Chartservice;
>>>>>>> 81db3e01dfd51b11218ee092e2fc2f9918861ce9
use think\Controller;
use app\v1\service\Systems;
use think\Cookie;
use think\Cache;
class Index extends BaseController
{

    public function index()
    {

        if ($this->request->isGet()) {
            //用户信息
<<<<<<< HEAD
            $chart = Taxationservice::instance()->getOne();
=======
            $chart = Chartservice::instance()->getOne();
>>>>>>> 81db3e01dfd51b11218ee092e2fc2f9918861ce9
            $this->assign('chart',$chart);
            $this->assign('userinfo',$this->userinfo);
            return $this->fetch();
        }
        return false;
    }
}