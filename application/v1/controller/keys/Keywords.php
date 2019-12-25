<?php
/**
 * 行业资讯关键字
 */
namespace app\v1\controller\keys;

use app\common\controller\AuthController;
use app\v1\service\Keywordservice;
use think\Config;

class Keywords extends AuthController
{
    /**
     * 首页
     */
    public function index(){
        if($this->request->isGet()){
            $list = Keywordservice::instance()->getlist();
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

        if($this->request->isPost()){
           $data['title'] = input('post.title','','trim');

           $ret = Keywordservice::instance()->_save($data);

           if($ret !==false){
               return json(['code'=>200,'msg'=>'添加成功']);
           }else {
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
            $id =  input('get.mid','','int');
            $info = Keywordservice::instance()->getidinfo($id);
            $this->assign('info',$info);
            return $this->fetch();
        }

        if($this->request->isPost()){
            $id =  input('post.mid','','int');
            $data['title'] =  input('post.title','','trim');
            if(empty($id) || is_null($id) || $id <= 0){
                return false;
            }

            $ret = Keywordservice::instance()->editdata($id,$data);

            if($ret !== false){
                return json(['code'=>200,'msg'=>'编辑成功']);
            }else{
                return json(['code'=>200,'msg'=>'编辑失败']);
            }

        }
        return false;
    }

    /**
     * 删除
     * 修改状态
     * @id
     */
    public function dels(){
        $id = input('get.mid','','int');
        if(empty($id) || is_null($id) || $id <= 0){
            return false;
        }

        $res =  Keywordservice::instance()->dels($id);

        if($res !== false){
            return json(['code'=>200,'msg'=>'删除成功']);
        }else{
            return json(['code'=>200,'msg'=>'删除失败']);
        }
    }
}