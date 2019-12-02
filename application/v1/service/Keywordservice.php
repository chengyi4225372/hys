<?php
/**
 * 行业资讯banner图service
 */
namespace app\v1\service;

use app\common\model\Admin;
use app\common\model\Keywords;
use app\common\model\Cases;
use plugin\Tree;
use plugin\Crypt;
use think\Config;

class Keywordservice
{
    // 静态对象
    protected static $instance = null;
    /**
     * @DESC：单例
     * @return null|static
     * @author: jason
     * @date: 2019-07-26 10:00:16
     */
    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    /**
     * 列表页
     */
    public function getlist(){
        $list = Keywords::instance()->where(['status'=>1])->order('id desc')->paginate(15);

        return $list?$list:'';
    }

    /**
     * 添加
     * @data array
     */
    public  function _save($data){

        if(empty($data) || !isset($data)){
            return false;
        }

        $ret = Keywords::instance()->save($data);

        if($ret){
            return true;
        }else {
            return false;
        }
    }

    /**
     * 获取用户信息
     * @id
     */
    public function getidinfo($id){
        if(empty($id) || is_null($id)|| $id <=0){
            return false;
        }

        $info = Keywords::instance()->where(['id'=>$id,'status'=>1])->find();

        return $info?$info:'';
    }

    /**
     * 编辑更新
     * @id
     * @data array
     */
    public function editdata($id,$data){
        if(empty($id)|| is_null($id) || $id<=0){
            return false;
        }

        if(empty($data)|| !isset($data)){
            return '数据更新不完整';
        }

        $ret =  Keywords::instance()->where(['id'=>$id,'status'=>1])->data($data)->update();

        if($ret !== false){
            return true;
        }else {
            return false;
        }
    }

    /**
     * 删除
     * @id
     * status =0
     */
    public function dels($id){
        if(empty($id) || is_null($id) || !isset($id)||$id <=0){
            return false;
        }

        $ret = Keywords::instance()->where(['id'=>$id])->data(['status'=>0])->update();

        if($ret !== false){
            return true;
        }else {
            return false;
        }
    }


}