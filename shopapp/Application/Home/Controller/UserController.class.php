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
        $this->display();
	}
}