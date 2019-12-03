<?php

/**
 * 客户案例后台控制器
 */
namespace app\v1\controller\cust;
use app\common\controller\AuthController;
use app\v1\service\Customerservice;
use think\Config;


class Customer extends AuthController
{
    /**首页
     * @return mixed
     */
    public function index()
    {
        if($this->request->isget()){

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
            return $this->fetch();
        }

        if($this->request->isAjax() || $this->request->isPost()) {

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
            return $this->fetch();
        }

        //编辑操作
        if($this->request->isPost()){


            if($ret !== false){
                return json(['code'=>200,'msg'=>'操作成功']);
            }else {
                return json(['code'=>400,'msg'=>'操作失败']);
            }

        }
        return false;
    }


    /**
     * 伪删除
     * @return \think\response\Json
     */
    public function del(){
        if($this->request->isGet()){
            $id  = input('get.id','','int');

        }
    }


    /**
     * 上传图片
     * @return \think\response\Json
     */
    public function uploadImgs(){
        // 获取上传文件
        $file =$this->request->file('file');
        // 验证图片,并移动图片到框架目录下。
        $path = ROOT_PATH.'public/uploads/imgs/partner/';

        if(!is_dir($path)){
            mkdir($path,0755);
        }

        $info = $file-> move($path,false,true);
        if($info){
            $mes = $info->getSaveName();
            $mes = str_replace("\\",'/',$mes);
            return json(['code'=>'200','msg'=>'上传成功','path'=>'/uploads/imgs/partner/'.$mes]);
        }else{
            // 文件上传失败后的错误信息
            $mes = $file->getError();
            return json(['code'=>'400','msg'=>$mes]);
        }
    }



}