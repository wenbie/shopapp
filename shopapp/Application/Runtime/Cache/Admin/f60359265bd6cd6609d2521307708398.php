<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">表单</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>基本信息</span></div>
    <form action="" method="post">
    <ul class="forminfo">
    <li><label>商品名称</label><input name="goods_name" type="text" class="dfinput" /><i>标题不能超过30个字符</i></li>
    <li><label>商品价格</label><input name="goods_price" type="text" class="dfinput" /><i>多个关键字用,隔开</i></li>
    <li><label>数量</label><input name="goods_number" type="text"  class="dfinput"/></li>
    <li><label>重量</label><input name="goods_weight" type="text" class="dfinput" value="http://www.mycodes.net" /></li>
    <li><label>介绍</label><textarea name="goods_introduce" cols="" rows="" class="textinput"></textarea></li>
        <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="确认保存"/>&nbsp;&nbsp;<a href="<?php echo U('showlist');?>">返回</a></li>
    </ul>
    </form>
    
    </div>


</body>

</html>