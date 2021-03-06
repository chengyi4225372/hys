<?php

namespace app\v1\controller\taxa;

use app\common\controller\AuthController;
use app\v1\service\Taxationservice;
use app\v1\service\Keywordservice;
use think\Config;

class Taxation extends AuthController
{
    /**首页
     * @return mixed
     */
    public function index()
    {
     if($this->request->isGet()){
        $title = input('get.title','','trim');
        $title =  $title?$title:'';
        $list = Taxationservice::instance()->getList($title);
        $this->assign('list',$list);
        return $this->fetch();
     }
     return false;
    }


    /**
     * 添加
     * @return mixed|\think\response\Json
     */
    public function add(){
        if($this->request->isGet()){
            $keylist = Keywordservice::instance()->getlist();
            $this->assign('list',$keylist);
            return $this->fetch();
        }

        if($this->request->isAjax() || $this->request->isPost()) {
            $data['imgs']  = input('post.imgs','','trim');
            $data['title'] = input('post.title','','trim');
            $data['description'] = input('post.description','','trim');
            $data['content']  = input('post.content','','trim');
            $data['keywords'] = implode(',',json_decode(input('post.keyword', '', 'trim')));
            $data['create_time'] = time();
            $data['sort'] = input('post.sort','','int');
            $data['skeyword'] = input('post.skeyword','','trim');


            $ret = Taxationservice::instance()->addData($data);

            if($ret){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else{
                return json(['code'=>400,'msg'=>'操作失败']);
            }

        }
    }

    /**
     * 编辑
     * @return mixed
     */
    public function edit(){
        if($this->request->isGet()){
            $id = input('get.id','','int');
            $info = Taxationservice::instance()->Getidinfo($id);
            //关键字列表
            $keylist  = Keywordservice::instance()->getlist();
            $keywords = explode(',',$info['keywords']);
            $this->assign('list',$keylist);
            $this->assign('info',$info);
            $this->assign('keywords',$keywords);
            return $this->fetch();
        }

        //编辑操作
        if($this->request->isPost()){
            $id  = input('post.mid','','int');
            $data['imgs']  = input('post.imgs','','trim');
            $data['title']  =input('post.title','','trim');
            $data['description'] = input('post.description','','trim');
            $data['content']  = input('post.content','','trim');
            $data['keywords'] = implode(',',json_decode(input('post.keyword', '', 'trim')));
            $data['sort'] = input('post.sort','','int');
            $data['skeyword'] = input('post.skeyword','','trim');

          if(empty($id) || is_null($id) || !isset($id) || $id <= 0){
              return false;
          }

          $ret = Taxationservice::instance()->GetByIdSave($id,$data);

          if($ret !== false){
              return json(['code'=>200,'msg'=>'编辑成功']);
          }else {
              return json(['code'=>400,'msg'=>'编辑失败']);
          }

        }

    }


    /**
     * 伪删除
     * @return \think\response\Json
     */
    public function del(){
        if($this->request->isGet()){
            $id  = input('get.id','','int');
            $ret = Taxationservice::instance()->updateStatus($id);

            if($ret !== false){
                return  json(['code'=>200,'msg'=>'删除成功']);
            }else{
                return  json(['code'=>400,'msg'=>'删除失败']);
            }
        }
    }


    /**
     * 排序
     * @sort 排序
     * @id id
     */
    public function  setsort(){
        if($this->request->isPost()){
            $id = input('post.id','','int');
            $sort = input('post.sort','','int');

            if(empty($id) || !isset($id) || is_null($id) || $id <= 0){
                return false;
            }

            $ret = Taxationservice::instance()->setthissort($id,$sort);

            if($ret !== false){
                return json(['code'=>200,'msg'=>'排序成功']);
            }else {
                return json(['code'=>400,'msg'=>'排序失败']);
            }

        }
        return false;
    }

    /**
     * 上传图片
     * @return \think\response\Json
     */
    public function uploadImgs(){
        // 获取上传文件
        $file =$this->request->file('file');
        // 验证图片,并移动图片到框架目录下。
        $path = ROOT_PATH.'public/uploads/imgs/taxation/';

        if(!is_dir($path)){
            mkdir($path,0755);
        }

        $info = $file->move($path,false,true);
        if($info){
            $mes = $info->getSaveName();
            $mes = str_replace("\\",'/',$mes);
            return json(['code'=>'200','msg'=>'上传成功','path'=>'/uploads/imgs/taxation/'.$mes]);
        }else{
            // 文件上传失败后的错误信息
            $mes = $file->getError();
            return json(['code'=>'400','msg'=>$mes]);
        }
    }



}