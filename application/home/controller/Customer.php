<?php
namespace app\home\controller;
use app\common\controller\BaseController;
use think\Cookie;

class Customer extends BaseController{

    /**
     * @return bool|mixed
     * 列表页
     */
    public  function index(){
        if ($this->request->isGet()) {
            $this->assign('title','客户案例');
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
            return $this->fetch();
        }
        return false;
    }
}

