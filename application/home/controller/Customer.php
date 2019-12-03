<?php
namespace app\home\controller;
use app\common\controller\BaseController;
use think\Cookie;

class Customer extends BaseController{

    public  function index(){
                       if($this->request->isGet()){
                           return $this->fetch();
                       }
                       return false;
                   }

                   public  function info(){
                           if($this->request->isGet()){
                               return $this->fetch();
                           }
                           return false;
                       }
}
