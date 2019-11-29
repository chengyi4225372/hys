<?php

/**
 * 新闻分类标题
 */

namespace app\v1\service;

use app\common\model\Admin;
use app\common\model\Cates;
use plugin\Tree;
use plugin\Crypt;
use think\Config;

class Cateservice
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
}