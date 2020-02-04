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
             $this->assign('title','节税方案_合法避税方法_税务筹划方案_行业解决方案-惠优税');
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
             $this->assign('title','合理节税产品_减少交税产品_合法节税方法_产品服务-惠优税');
             return $this->fetch();
         }
         return false;
     }
}