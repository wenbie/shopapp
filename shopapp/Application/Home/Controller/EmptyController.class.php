<?php
/**
 * Created by PhpStorm.
 * User: Lin
 * Date: 2017/9/1
 * Time: 21:27
 */

namespace Home\Controller;
use Think\Controller;

class  EmptyController extends  Controller {
    function index() {
//        echo "当前请求的控制器是非法的";
        $this->display('./Application/Common/error.html');
    }

    function _empty() {
//        echo "当前请求的控制器和操作方法都是非法的";
        $this->display('./Application/Common/error.html');
    }
}