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
<<<<<<< HEAD
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
=======
        if($this->request->isGet()){
            return $this->fetch();
        }
        return false;
    }

    /**
     * 详情页
     */
    public function infos(){
        if($this->request->isGet()){
            return $this->fetch();
        }
        return false;
    }
}
>>>>>>> 094fa173557b6b9114005ae6f0a6eacf7905c750
