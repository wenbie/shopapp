<?php
/**
 * Created by PhpStorm.
 * User: Lin
 * Date: 17/9/4
 * Time: 下午7:00
 */

namespace Home\Model;
use Think\Model;

class UserModel extends Model {
    // 是否批处理验证
    protected $patchValidate    =   true;
    protected $_validate        =   array(  // 自动验证定义
//        array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        array('username','require','用户名必须填写'),
        array('username','','用户名重复',0,'unique'),
        //密码非空
        array('password','require','密码必须填写'),
        //确认密码非空,和密码一样
        array('password2','require','确认密码必须填写'),
        array('password2','password','两次密码不同',0,'confirm'),
        //邮箱
        array('user_email','email','邮箱不合法',2),
        //qq号
        array('user_qq','number','qq号码必须是数字'),
        array('user_qq','6,14','qq号码长度为6-14位之间',0,'length'),
        //学历
        array('user_xueli','1,2,3,4','学历必须选择一个',0,'in'),
        //爱好
        array('user_hobby','check_hobby','至少2个爱好',1,'callback'),
    );

    //arg代表被校验的表单域信息，也就是$_POST['user_hobby']
    function check_hobby($arg) {
        if(count($arg) < 2) {
            return false;
        }
        return true;
    }

    protected $_map =   array( // 字段映射定义
        //form 表单的name 对应数据库中的字段
        'name' => 'username',
        'pwd' => 'password',
        'email' => 'user_email',
        'qq' => 'user_qq',
        'sex' => 'user_sex',
        'xueli' => 'user_xueli',
        'hobby' => 'user_hobby',
    );
}