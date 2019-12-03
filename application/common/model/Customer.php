<?php
namespace app\common\model;

use think\Model;

class Customer extends Model
{
    //静态对象
    protected static $instance = null;
    //表名
    protected $table='h_hys_customer';
    /**
     * 单例
     * @author lamkakyun
     * @date 2019-04-12 09:47:11
     * @return void
     */
    public function instance()
    {
        if(!self::$readInstance) self::$readInstance = new self('', '', '');
        return self::$readInstance;
    }


}