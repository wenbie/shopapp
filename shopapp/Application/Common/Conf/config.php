<?php
return array(
	//'配置项'=>'配置值'
    'DEFAULT_MODULE' => 'Home',
    'MODULE_ALLOW_LIST' => array('Home','Admin'),
    //跟踪信息trace
    'SHOW_PAGE_TRACE' => true,
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'shopapp',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sw_',    // 数据库表前缀
);