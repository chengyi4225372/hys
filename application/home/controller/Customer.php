<?php
namespace app\home\controller;
use app\common\controller\BaseController;
use app\v1\service\Customerservice;
use think\Cookie;

class Customer extends BaseController{

    /**
     * @return bool|mixed
     * 列表页
     */
    public  function index(){
        if ($this->request->isGet()) {
            $list = Customerservice::instance()->getlist('');
            $this->assign('list',$list);
            $this->assign('title','节税案例_避税案例_税务筹划案例_财税规划案例_客户案例-惠优税');
            return $this->fetch();
        }
        return false;
    }

    /**
     * @return bool|mixed
     * 详情页
     */
    public function info()
    {
        if ($this->request->isGet()) {
            $mid  = input('get.mid','','int');
            $info = Customerservice::instance()->getidinfo($mid);
            $this->assign('info',$info);
            $this->assign('title','客户案例详情页');
            return $this->fetch();
        }
        return false;
    }
}

