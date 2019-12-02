<?php
/**
 * 行业资讯关键字
 */
namespace app\v1\controller\keys;

use app\common\controller\AuthController;
use think\Config;

class Keywords extends AuthController
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