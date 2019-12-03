<?php
/**
 * 行业解决方案控制器
 */
namespace app\home\controller;
use app\common\controller\BaseController;
use think\Controller;
use app\v1\service\Systems;
use think\Cookie;
use think\Cache;
class Programme extends BaseController
{
  
     public function index (){
         if($this->request->isGet()){
             $this->assign('title','行业解决方案');
             return $this->fetch();
         }
        return false;
     }

     /**
      * @author jason
      * @name 产品服务
      */
     public function productservice()
     {
         if($this->request->isGet()){
             $this->assign('title','产品服务');
             return $this->fetch();
         }
         return false;
     }
}