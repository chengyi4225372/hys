<?php

/**
 * 行业资讯头图
 */
namespace app\v1\controller\ban;

use app\common\controller\AuthController;
use app\v1\service\Bannerservice;
use think\Config;

class Banner extends AuthController
{
    /**
     * 列表页面
     */
    public function index(){
        if($this->request->isGet()){
           $list = Bannerservice::instance()->getlist();
           $this->assign('list',$list);
           return $this->fetch();
        }
        return false;
    }


    /**
     * 添加
     */
    public function add(){
        if($this->request->isGet()){

            return $this->fetch();
        }

        if($this->request->isPost()|| $this->request->isAjax()){
            $data['imgs'] = input('post.imgs','','trim');

            $rest = Bannerservice::instance()->_save($data);

            if($rest){
                return json(['code'=>200,'msg'=>'添加成功']);
            }else{
                return json(['code'=>400,'msg'=>'添加失败']);
            }
        }
        return false;
    }


    /**
     * 编辑
     * @id
     */
    public function edit(){
        if($this->request->isGet()){
            $id = input('get.mid','','int');
            $info = Bannerservice::instance()->getidinfo($id);
            $this->assign('info',$info);
            return $this->fetch();
        }

        if($this->request->isPost()){
             $id = input('post.mid','','int');
             $data['imgs'] = input('post.imgs','','trim');

              if(empty($id) || is_null($id) || $id<=0){
                  return false;
              }

             $ret  = Bannerservice::instance()->editdata($id,$data);

             if($ret !== false){
                 return json(['code'=>200,'msg'=>'编辑成功']);
             }else{
                 return json(['code'=>400,'msg'=>'编辑失败']);
             }
        }

        return false;
    }


    /**
  * 上传图片
  */
    public function uploadimgs(){
      // 获取上传文件
      $file =$this->request->file('file');
      // 验证图片,并移动图片到框架目录下。
      $path = ROOT_PATH.'public/uploads/imgs/banner/';

      if(!is_dir($path)){
          mkdir($path,0755);
      }

      $info = $file-> move($path,false,true);
      if($info){
          $mes = $info->getSaveName();
          $mes = str_replace("\\",'/',$mes);
          return json(['code'=>'200','msg'=>'上传成功','path'=>'/uploads/imgs/banner/'.$mes]);
      }else{
          // 文件上传失败后的错误信息
          $mes = $file->getError();
          return json(['code'=>'400','msg'=>$mes]);
      }
  }
}