<?php
/**
 * Created by PhpStorm.
 * User: Lin
 * Date: 2017/9/1
 * Time: 20:11
 */

namespace Admin\Controller;
use Think\Controller;
use Think\Verify;

class ManagerController extends Controller {

    public function login() {
        if(IS_POST) {
            $code = I('post.manager_verify');
            $vry = new Verify();
            if($vry->check($code)) {
               $name = I('post.manager_name');
               $pwd = I('post.manager_pwd');
               $info = D('Manager')->where(array('mg_name'=>$name,'mg_pwd'=>$pwd))->find();

               if($info) {
                   session('admin_id',$info['mg_id']);
                   session('admin_name',$info['mg_name']);
                    $this->redirect('Index/index');

               }
               $this->assign('errorlogin','用户名或密码不正确');
            }else{
               $this->assign('errorlogin','验证码不正确');
            }
        }
        $this->display();
    }

    function verifyImg() {
        $cfg = array(
            'fontSize'  =>  20,              // 验证码字体大小(px)
            'imageH'    =>  50,               // 验证码图片高度
            'imageW'    =>  130,               // 验证码图片宽度
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
        );

        //实例化verify对象
        $vry = new Verify($cfg);
        $vry->entry();
    }

    function logout() {
        session();
        $this->redirect('Manager/login');
    }
}