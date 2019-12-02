<?php


/**
 * 行业资讯头图
 */
namespace app\v1\controller\ban;

use app\common\controller\AuthController;
use think\Config;

class Banner extends AuthController
{
    /**
     * 首页
     */
    public function index(){
        if($this->request->isGet()){
           return $this->fetch();
        }
        return false;
    }
}