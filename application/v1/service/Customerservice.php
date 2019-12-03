<?php

/**
 * 客户案例service
 */
namespace app\v1\service;

use app\common\model\Customer;
use plugin\Tree;
use plugin\Crypt;
use think\Config;

class Customerservice
{
    protected static $instance = null;

    /**
     * @DESC：单例
     * @return null|static
     * @author: jason
     * @date: 2019-08-05 03:48:37
     */
    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }


    /**
     * 获取列表
     * @title
     */
    public  function  getlist($title){
       if(!empty($title) || isset($title)){
           $w =[
               'status'=>1,
               'title|description'=>['like','%'.$title.'%'],
           ];
       }
       $list = Customer::instance()->where($w)->order('create_time desc')->paginate(15);

       return $list?$list:'';
    }


    /**
     * 获取详情
     * @id
     */
    public function getidinfo($id){
        if(empty($id) || is_null($id) || isset($id) ==false){
            return false;
        }

        $info = Customer::instance()->where(['id'=>$id])->find();

        return $info?$info:'';
    }


    /**
     * 添加
     * @data array
     */
     public  function savedata($data){
         if(empty($data) || isset($data) == false){
             return false;
         }

         $ret = Customer::instance()->save($data);

         if($ret !== false){
             return true;
         }else {
             return false;
         }
     }


     /**
      * 编辑
      * @id
      * @data array
      */
     public function  getidsetdata($id,$data){
         if(empty($id)|| isset($id) == false ||is_null($id)){
             return false;
         }

         if(empty($data)|| !isset($data)){
             return '数据不合法';
         }

         $ret = Customer::instance()->where(['id'=>$id])->data($data)->update();

         if($ret !== false){
             return true;
         }else {
             return false;
         }
     }


     /**
      * 删除
      * 修改状态
      * @id
      */
     public function save_status($id){
         if(empty($id)||is_null($id) || isset($id) == false){
             return false;
         }

        $arr = ['status'=>0];
        $ret = Customer::instance()->where(['id'=>$id])->update($arr);
        if($ret !== false){
            return true;
        }else {
            return false;
        }
     }

}