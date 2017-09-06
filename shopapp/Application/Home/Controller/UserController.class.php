<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller {
    //定义空操作方法
    function _empty() {
//        echo "当前的操作是非法的";
        $this->display('./Application/Common/error.html');
    }

	function login() {
        $this->display();
	}
	function regist() {
        $user = D('User');

        if(IS_POST) {
            //自动验证，默认处理post
            $data = $user->create();
            if($data) {
                $data['user_hobby'] = implode(',',$data['user_hobby']);
                //把数据添加到数据库中
                $newid = $user->add($data);
                if($newid) {
//                    $this->success('用户注册成功',U('Index/index'),1);
                    $this->redirect('Index/index');
                } else {
//                    $this->error('用户注册失败',U('regist'),1);
                    $this->redirect('regist');
                }
            } else{
                //将错误信息展示在页面上
                $this->assign('errorinfo',$user->getError());
            }
        }


        $this->display();
	}

	//ajax检验是否可用
    function checkName() {
        if(IS_AJAX) {
         $mingzi = I('get.mingzi');
         //echo $mingzi;die;
         $info =  D('User')->where(array('username'=>$mingzi))->find();
         if($info) {
             echo json_encode(array('status'=>0));
         }else {
             echo json_encode(array('status'=>1));
         }
        }
    }
}