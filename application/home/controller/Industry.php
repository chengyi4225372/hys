<?php
namespace app\home\controller;

use app\common\controller\BaseController;
use app\v1\service\Bannerservice;
use app\v1\service\Taxationservice;
use app\v1\service\Keywordservice;
use think\Controller;
use app\v1\service\Systems;
use think\Cookie;
use think\Cache;
class Industry extends BaseController
{

    public function index(){
       if($this->request->isGet()){
            $keyword  = input('get.keyword','','trim');
            $title    = input('get.title','','trim');

            $titles = isset($keyword) ?$keyword:$title;
           //获取关键字列表
           $keywords = Keywordservice::instance()->getlist();
           $this->assign('keywords',$keywords);
           //首页头图
           $banner = Bannerservice::instance()->getImgsOne();
           $this->assign('banner',$banner);
           //列表
           $list  = Taxationservice::instance()->getList($titles);
           foreach($list as $key =>$val){
               $list[$key]['keywords'] = explode(',', $list[$key]['keywords']);
           }
           $this->assign('list',$list);
           $this->assign('title','行业资讯');
           return $this->fetch();
       }

    }

}