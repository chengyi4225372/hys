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
    /**
     * 新闻资讯列表
     * @return mixed
     */
    public function index(){
       if($this->request->isGet()){
            $keyword  = input('get.keyword','','trim');
            $title    = input('get.title','','trim');
            $titles   = $keyword?$keyword:$title;

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
       return false;
    }

    /**
     * 新闻资讯列表 接口
     * @title 搜索关键字
     * @page 当前页
     */
     public function newsapi(){
            if($this->request->isPost() || $this->request->isAjax()){
                $title = input('post.title', '', 'trim'); //热门搜索
                $page  = input('post.page','','int');
                $titles = $title? $title: '';
                $page  = $page ?$page :'1';//当前页数
                $size  = 35; //每页显示条数

                $data   = Taxationservice::instance()->getnewsjson($titles, $page,$size);
                $count  =  Taxationservice::instance()->getnewscount($titles);
                $countpage = ceil($count / $size);

                if(!empty($data)){
                    return json(['data'=>$data,'page'=>$page,'size'=>$size,'count'=>$countpage,'code'=>200,'msg'=>'success']);
                }

                if(empty($data)){
                    return json(['data'=>'','code'=>400,'msg'=>'error']);
                }
            }

            return false;
     }


    /***
     * 新闻资讯详情
     * @return mixed
     */
    public function infos(){
        if($this->request->isGet()){
            $id = input('get.mid','','int');
            $info = Taxationservice::instance()->Getidinfo($id);
            $this->assign('info',$info);
            $this->assign('title','行业新闻资讯详情');
            return $this->fetch();
        }
        return false;
    }
}