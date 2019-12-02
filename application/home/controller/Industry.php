<?php
namespace app\home\controller;

use app\common\controller\BaseController;
use app\v1\service\Taxationservice;
use think\Controller;
use app\v1\service\Systems;
use think\Cookie;
use think\Cache;
class Industry extends BaseController
{

    public function index(){
       if($this->request->isGet()){

           $this->assign('title','行业资讯');
           return $this->fetch();
       }

    }

}