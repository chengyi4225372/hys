<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2019/7/24
 * Time: 17:04
 */
namespace app\v1\controller;
//use think\Controller;
use app\common\controller\AuthController;
use app\common\model\User;
use app\v1\service\Home;
use app\common\model\Admin;
use app\v1\service\Protuctservice;
use app\v1\service\Infosservice;
use app\v1\service\Userservice;
use app\v1\service\Taxationservice;
use app\v1\service\Customerservice;
class Index extends AuthController
{
    /**
     * @DESC：后台首页
     * @author: jason
     * @date: 2019-07-24 05:05:08
     */
    public function index()
    {
        $userId = Cookie('userid');
        //用户信息
        $userInfo = Admin::where(['id' => $userId])->find()->toArray();
        //客户案例
        $cust_count = Customerservice::instance()->getcount();
        //行业资讯
        $taxt_count = Taxationservice::instance()->getcount();
        //用户信息统计
        $user_count = Userservice::instance()->usercount();
        $this->assign('user_count',!empty($user_count) ? $user_count : 0);
        $this->assign('cust_count',!empty($cust_count) ? $cust_count : 0);
        $this->assign('taxt_count',!empty($taxt_count) ? $taxt_count : 0);


        $this->assign('title','首页');
        $this->assign('userInfo',$userInfo);
        return $this->fetch();
    }
}