<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xmlns:wb="http://open.weibo.com/wb">
    <head>
        <title>美西时尚-全球奢侈品购物网站,奢侈品网购,正品折扣,尽在MEICI.COM</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="奢侈品,奢侈品网购,奢侈品网站,奢侈品购物网站,中国最大奢侈品网站,美西时尚" />
        <meta name="description" content="中国奢侈品时尚网购平台【美西时尚】提供国际一线奢侈品品牌包包,服装,配件,鞋履等系列产品,100%正品保障,限量特卖4折起,7天无理由退换货,订购热线：4000-250-630 轻松享受奢华！" />

        <link rel="shortcut icon" href="/Public/Home/img/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/meici.css" />
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/meici_new.css" />
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/share_style0_16.css" />

    </head>
    <body>
        <!--公共头部-->
        <div id="header">
            <div class="headerbar">
                <div class="headerbar_m clearfix">
                    <div class="info_box float_l clearfix">
                        <div class="login_info float_l" id="loginbar">
                            <!--<a target="_blank" rel="nofollow" href="/member/register.html" style="border-left:none; padding-left:0;">注册</a><a rel="nofollow" href="/member/login.html">登录</a>-->

                            <span class="wel_u">
                            <span style="border-left:none;">欢迎您，</span>
                            美西贵宾
                            </span>
                            <a style="border-left:none;" href="/index/logout.html">退出</a>
                            <a href="/account/index.html" target="_blank" style="border-right:1px solid #ccc; margin-right:15px; _margin-right:8px;">我的美西</a>

                        </div>
                        <div class="consult float_l">                
                            <a href="/member/OrderSct" title="订单查询" target="_blank">订单查询</a>
                        </div>
                    </div>
                    <div class="focus_info float_r clearfix">
                        <div class="hot_line">客服热线：4000-250-630</div>
                        <div class="focusUs" href="" title="关注我们" target="_blank">
                            <span>关注我们<em></em></span>
                        </div>
                        <!--购物车-->
                        <div class="shopping_cart">
                            <a class="shopping_cart_btn" href="/cart.html" title="购物袋-美西时尚" rel="nofollow">
                                <div class="cart_n float_l"><em></em><i>购物袋（&nbsp;<span id="cookieCount">0</span>&nbsp;）</i></div>
                                <div class="cart_c float_l"><i>▼</i></div>
                            </a>
                        </div>            
                    </div>
                </div>        
            </div>
            <div class="header_top">
                <!-- 手机APP二维码 -->
                <div class="meiciappBox">
                    <a href="/app" rel="nofollow" target="_blank"><img src="/Public/Home/img/ewm_indexTop.png" width="75px" /></a>
                    <span><img src="/Public/Home/img/ewm_txt.png" /></span>
                </div>
                <!--搜索-->
                <div class="search_zone">
                    <div class="float_l in"><input id="search-input" name="search-input" title="" value="请输入您的关键词" onfocus="searchFocus(this)" onblur="searchBlur(this)" type="text" /></div>
                    <div class="float_l bu"><button id="search-button" onclick="return search();"></button></div>
                    <div class="search_label"></div>
                </div>      <!--logo-->
                <div class="logo"><a href="/" title="美西时尚-高端时尚奢侈品购物平台" target="_blank"><img alt="美西时尚-奢侈品网购网站" src="/Public/Home/img/meicilogo.png" /></a></div>   
            </div>
            <!--导航-->
            <div class="main_nav">
                <div class="main_nav_bd">
                    <ul class="clearfix">
                        <li>
                            <a style="background: none repeat scroll 0% 0% rgb(255, 255, 255); color: rgb(51, 51, 51);" class="menu_s menu_s_a" target="_blank" href="/" rel="nofollow">首页</a>
                        </li>
                        <li>
                            <a class="menu_s" target="_blank" href="/new" rel="nofollow">新近单品</a>
                        </li>
                        <li class="nav_global">
                            <a class="menu_s menu_s_a" target="_blank" href="/bargains/0-0-0-0-new-240-6409-1-0-0.html" rel="nofollow">全球购</a>
                            <em class="nav_tip"></em>
                        </li>
                        <li>
                            <a style="background: none repeat scroll 0% 0% rgb(255, 255, 255); color: rgb(51, 51, 51);" class="menu_s" target="_blank" href="/woman" rel="nofollow">女士</a>
                        </li>
                        <li>
                            <a class="menu_s" target="_blank" href="/man" rel="nofollow">男仕</a>
                        </li>
                        <li>
                            <a class="menu_s" target="_blank" href="/children">童装</a>
                        </li>
                        <li>
                            <a style="background: none repeat scroll 0% 0% rgb(255, 255, 255); color: rgb(51, 51, 51);" class="menu_s" target="_blank" href="/watch" rel="nofollow">腕表</a>
                        </li>
                        <li>
                            <a class="menu_s" target="_blank" href="/brands" rel="nofollow">品牌</a>
                        </li>
                        <li>
                            <a class="menu_s" target="_blank" href="/sales" rel="nofollow">特惠区</a>
                        </li>
                        <li class="mzine_an">
                            <a style="background: none repeat scroll 0% 0% rgb(255, 255, 255); color: rgb(51, 51, 51);" class="menu_s menu_s_a" href="/mzine" target="_blank" title="美西Mzine"><img src="/Public/Home/img/mzine.jpg" alt="Mzine" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <style type="text/css">
            .collect_box, .collect_alredy_box {position:absolute; z-index:5; left:-93px; top:30px; top:31px�; *top:33px; _top:34px;}
            .scsj {width:21px; height:10px; background:url(/Public/Home/img/scsj.gif) no-repeat; position:relative; left:135px; z-index:4; overflow:hidden;}
            .collect_box_m {width:192px; height:81px; border:1px solid #eee; background:#fff; position:relative; z-index:3; top:-1px;}
            .collect_succ {height:24px; padding:0 0 2px 33px; background:url(/Public/Home/img/sc.gif) no-repeat; font-size:14px; color:#8e0c3a; margin:18px 0 0 30px;}
            .go_myfav {margin-left:63px; border-bottom:1px solid #ccc;}
            .close_collect_box {position:absolute; font-family:Arial, Helvetica, sans-serif; font-size:10px; right:0; top:0; width:20px; height:20px; text-align:center; line-height:20px; cursor:pointer;}

            .overseas_s {height:30px;}
            .overseas {position:absolute; width:260px; top:25px; left:-202px; background:#fff; padding:5px 10px; border:1px solid #ccc; display:none;}

            .share_btns {width:200px;}
            .bdshare-button-style0-16 a, .bdshare-button-style0-16 .bds_more {margin:0 2px 0 0;}
            .bdsharebuttonbox {position:relative; top:0; top:-6px�; *top:-6px; float:left;}
            @media screen and (-webkit-min-device-pixel-ratio:0){ .bdsharebuttonbox {top:0;} }
            @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) }

            .dycommodity{ width: 100%;}
            .dycommodity ul{}
            .dycommodity ul li{ float: left; display: inline-block; width: 188px; margin-left: 2px;}
            .dycommodity ul li span{ display: inline-block; width: 80%;}
            #footer{ clear: both;}
            .dymc{margin-top: 3px; height: 273px; padding-bottom: 63px;border-bottom: 1px dashed #ccc;margin-bottom: 10px;}
            .dymc img{display: inline-block; float: left;}
            .dymc .dyml{margin-left: 3px;}
        </style>
        <div id="content" class="padTop10px">
            <div class="clearfix">
                <!--左侧-->
                <div class="pro_l clearFix">

                    <!--商品缩略图片-->
                    <div class="pro_img_list">
                        <div class="goods_scroll">
                            <div class="prev"></div>
                            <div class="prev_cur"></div>
                            <div style="display: block;" class="next"></div>
                            <div style="display: none;" class="next_cur"></div>
                            <div class="scroll_mask" id="product-picture-list">
                                <ul id="mycarousel1" class="goods_list3">
                                    <li class="list_edit"><a class="zoomThumbActive" picnum="1" href="javascript:void(0);" rel="{ gallery: 'gal1', smallimage: '/Public/Home/img/d-049645-1.jpg',largeimage: '/Public/Home/img/h-049645-1.jpg'}"><img src="/Public/Home/img/s-049645-1.jpg" alt="Michael Kors 迈克高仕Selma 牛皮 女士 单肩包" /></a></li>
                                    <li class="list_edit"><a class="" href="javascript:void(0);" picnum="2" rel="{ gallery: 'gal1', smallimage: '/Public/Home/img/d-049645-2.jpg',largeimage: '/Public/Home/img/h-049645-2.jpg'}"><img src="/Public/Home/img/s-049645-2.jpg" alt="Michael Kors 迈克高仕Selma 牛皮 女士 单肩包" /></a></li>
                                    <li class="list_edit"><a class="" href="javascript:void(0);" picnum="3" rel="{ gallery: 'gal1', smallimage: '/Public/Home/img/d-049645-3.jpg',largeimage: '/Public/Home/img/h-049645-3.jpg'}"><img src="/Public/Home/img/s-049645-3.jpg" alt="Michael Kors 迈克高仕Selma 牛皮 女士 单肩包" /></a></li>
                                    <li class="list_edit"><a href="javascript:void(0);" picnum="4" rel="{ gallery: 'gal1', smallimage: '/Public/Home/img/d-049645-4.jpg',largeimage: '/Public/Home/img/h-049645-4.jpg'}"><img src="/Public/Home/img/s-049645-4.jpg" alt="Michael Kors 迈克高仕Selma 牛皮 女士 单肩包" /></a></li>
                                    <li class="list_edit"><a href="javascript:void(0);" picnum="5" rel="{ gallery: 'gal1', smallimage: '/Public/Home/img/d-049645-5.jpg',largeimage: '/Public/Home/img/h-049645-5.jpg'}"><img src="/Public/Home/img/s-049645-5.jpg" alt="Michael Kors 迈克高仕Selma 牛皮 女士 单肩包" /></a></li>
                                    <li class="list_edit"><a href="javascript:void(0);" picnum="6" rel="{ gallery: 'gal1', smallimage: '/Public/Home/img/d-049645-6.jpg',largeimage: '/Public/Home/img/h-049645-6.jpg'}"><img src="/Public/Home/img/s-049645-6.jpg" alt="Michael Kors 迈克高仕Selma 牛皮 女士 单肩包" /></a></li>
                                    <li class="list_edit"><a href="javascript:void(0);" picnum="7" rel="{ gallery: 'gal1', smallimage: '/Public/Home/img/d-049645-7.jpg',largeimage: '/Public/Home/img/h-049645-7.jpg'}"><img src="/Public/Home/img/s-049645-7.jpg" alt="Michael Kors 迈克高仕Selma 牛皮 女士 单肩包" /></a></li>


                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--商品大图-->
                    <div class="pro_img">
                        <a title="" style="outline-style: none; text-decoration: none;" href="/Public/Home/img/h-049645-1.jpg" class="jqzoom" rel="gal1">
                            <div class="zoomPad"><img title="" style="opacity: 1;" src="/Public/Home/img/d-049645-1.jpg" alt="Michael Kors 迈克高仕Selma 牛皮 女士 单肩包" height="460" /><div style="display: none; top: 239px; left: 39px; width: 185px; height: 220px; position: absolute; border-width: 1px;" class="zoomPup"></div><div style="position: absolute; z-index: 5001; left: 448px; top: 0px; display: none;" class="zoomWindow"><div style="width: 388px;" class="zoomWrapper"><div style="width: 100%; position: absolute; display: block;" class="zoomWrapperTitle">undefined</div><div style="width: 100%; height: 460px;" class="zoomWrapperImage"><img src="/Public/Home/img/h-049645-1.jpg" style="position: absolute; border: 0px none; display: block; left: -83.5509px; top: -500.87px;" /></div></div></div><div style="visibility: hidden; top: 208.5px; left: 146.5px; position: absolute;" class="zoomPreload">图片加载中</div></div>
                        </a>
                    </div>
                </div>
                <!--右侧-->
                <div class="pro_r">
                    <form action="" method="post" name="subpro" id="subpro">
                        <!--品牌以及商品标题-->
                        <h1 class="relative">
                            <a class="c_purple" href="/brands/Michael+Kors.html" target="_blank" title="了解品牌">Michael Kors 迈克高仕</a>
                            <br />
                            <span>Selma 牛皮 女士 单肩包 </span>
                        </h1>

                        <!--参考价格-->
                        <div class="position_rel">
                            <div class="pro_price">
                                <p>
                                    <s class="c_gray_2">参考价：￥2580.00</s><br />                      </p><div style="position:relative;">
                                    <span class="c_purple"><br />活动价：￥1799.00</span>
                                    <div class="pro_hint"><span></span>该商品售价由商品单价、<br />行邮税、运费组成。</div>
                                </div>
                                <p></p>

                                <div style="margin-top:20px;">
                                    <p>到货时间：
                                        该商品到货时间预计3-5个工作日                                                    </p>
                                </div>
                                <!---->
                            </div>
                        </div>
                        <!--尺码选择-->
                        <div class="pro_size" style="display:block">
                            <div class="clearfix">
                                <div id="size_section"></div>

                            </div>


                            <div id="messages_product_view" class="clearfix" style="padding-top:10px;display:none;">
                                <div class="error_msg">请选择商品的尺码</div>
                            </div>
                        </div>
                        <!--App下载引导-->
                        <!--显示商品的各种状态如售罄 clube 缺货等-->
                        <div id="addbutton" class="pro_btn clearfix"><input id="btn-shopping2" class="btn_buy_now float_l" onclick='ga("send", "event", "商品详细页", "即刻购买", "049645-47108");newAddCart(47108);' style="margin-right:5px;" type="button" />
                        <input id="btn-shopping1" class="btn_add_shopping float_l" onclick='ga("send", "event", "商品详细页", "加入购物袋", "049645-47108"); clickAddCart(47108);addCartToGa("049645", "2", "1", "Michael Kors 迈克高仕", "白色", "1799.00", "Michael Kors 迈克高仕 Selma 牛皮 女士 单肩包");' type="button" /></div>
                    </form>
                    <div class="pro_con clearfix">
                        <div class="shares_zone float_l" style="margin:0;">
                            <div class="share_btns">
                                <i>分享：</i>
                                <div style="float:left; margin-left:-4px\9;">
                                    <a class="ico_sina_s" href="javascript:sina();%20void(0);" title="分享到新浪微博" onclick="ga('send', 'event', '商品详细页', '新浪微博', '049645-47108');"></a>
                                    <div class="clear"></div>
                                </div>
                                <div data-bd-bind="1484287775651" class="bdsharebuttonbox bdshare-button-style0-16">
                                    <a class="bds_weixin" title="分享到微信" href="javascript:void(0);" onclick="boxShow('bc15'); ga('send', 'event', '商品详细页', '微信', '049645-47108');" style="margin-right:2px;"></a>
                                    <a class="bds_douban" data-value="douban" href="#" data-cmd="douban" title="豆瓣网" onclick="ga('send', 'event', '商品详细页', '豆瓣', '049645-47108');"></a>

                                </div>
                                <!--<a href="#" id="yg_href" target="_blank" ><span id="autoHref"></span></a>-->
                            </div>
                        </div>

                        <!--我要收藏-->
                        <div class="pro_collect float_r" id="needWish" style="margin: 0px;">
                            <a href="javascript:void(0);" onclick="addSC();ga('send', 'event', '商品详细页', '加入收藏', '049645-47108');"><i>加入收藏（9280）</i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pro_hty" style="height: 350px;">
                <div style=" width: 100%; margin-top: 38px;border-top: 1px #e6e6e6 solid;">
                    <div class="tabTitle" style=" margin-top: 42px;"><h2><img src="/Public/Home/img/xgtj.png" /></h2><p>相关推荐</p></div>
                </div>
                <div class="pro_detail_b" style="padding:20px 0;">
                    <div class="pro_recommend_r">
                        <ul class="clearfix">
                            <li>
                                <a title="Gucci 古驰 牛皮拼接织物 女士 钥匙包" onclick="proClick('061918,Gucci 古驰 牛皮拼接织物 女士 钥匙包,配饰,Gucci,经典,1,商品详细页相关推荐');ga('send', 'event', '商品详细页', 'Recommend', '061918-59382');" target="_blank" href="/product/detail/id/061918/saleid/59382.html">
                                    <img alt="Gucci 古驰 牛皮拼接织物 女士 钥匙包" src="/Public/Home/img/q-061918-1.jpg" width="160" /><br />
                                    <div class="pro_recommend_name"><span>Gucci 古驰</span><br /><span>牛皮拼接织物 女士 钥匙包</span></div>
                                </a>
                            </li>                       <li>
                                <a title="Salvatore Ferragamo 菲拉格慕 牛皮 女士 高跟鞋" onclick="proClick('058311,Salvatore Ferragamo 菲拉格慕 牛皮 女士 高跟鞋,鞋履,Salvatore Ferragamo,红色,2,商品详细页相关推荐');ga('send', 'event', '商品详细页', 'Recommend', '058311-55775');" target="_blank" href="/product/detail/id/058311/saleid/55775.html">
                                    <img alt="Salvatore Ferragamo 菲拉格慕 牛皮 女士 高跟鞋" src="/Public/Home/img/q-058311-1.jpg" width="160" /><br />
                                    <div class="pro_recommend_name"><span>Salvatore Ferragamo 菲拉格慕</span><br /><span>牛皮 女士 高跟鞋</span></div>
                                </a>
                            </li>                       <li>
                                <a title="Michael Kors 迈克高仕 Hamilton 牛皮 女士 两用包" onclick="proClick('056157,Michael Kors 迈克高仕 Hamilton 牛皮 女士 两用包,包袋,Michael Kors,香槟色,3,商品详细页相关推荐');ga('send', 'event', '商品详细页', 'Recommend', '056157-53621');" target="_blank" href="/product/detail/id/056157/saleid/53621.html">
                                    <img alt="Michael Kors 迈克高仕 Hamilton 牛皮 女士 两用包" src="/Public/Home/img/q-056157-1.jpg" width="160" /><br />
                                    <div class="pro_recommend_name"><span>Michael Kors 迈克高仕</span><br /><span>Hamilton 牛皮 女士 两用包</span></div>
                                </a>
                            </li>                       <li>
                                <a title="Michael Kors 迈克高仕 Selma 牛皮 女士 单肩包" onclick="proClick('049062,Michael Kors 迈克高仕 Selma 牛皮 女士 单肩包,包袋,Michael Kors,黑色,4,商品详细页相关推荐');ga('send', 'event', '商品详细页', 'Recommend', '049062-46525');" target="_blank" href="/product/detail/id/049062/saleid/46525.html">
                                    <img alt="Michael Kors 迈克高仕 Selma 牛皮 女士 单肩包" src="/Public/Home/img/q-049062-1.jpg" width="160" /><br />
                                    <div class="pro_recommend_name"><span>Michael Kors 迈克高仕</span><br /><span>Selma 牛皮 女士 单肩包</span></div>
                                </a>
                            </li>                       <li>
                                <a title="Michael Kors 迈克高仕 早春新款 Selma 压纹牛皮 女士 斜挎包" onclick="proClick('046564,Michael Kors 迈克高仕 早春新款 Selma 压纹牛皮 女士 斜挎包,包袋,Michael Kors,黑色,5,商品详细页相关推荐');ga('send', 'event', '商品详细页', 'Recommend', '046564-44027');" target="_blank" href="/product/detail/id/046564/saleid/44027.html">
                                    <img alt="Michael Kors 迈克高仕 早春新款 Selma 压纹牛皮 女士 斜挎包" src="/Public/Home/img/q-046564-1.jpg" width="160" /><br />
                                    <div class="pro_recommend_name"><span>Michael Kors 迈克高仕</span><br /><span>早春新款 Selma 压纹牛皮 女士 斜挎包</span></div>
                                </a>
                            </li>                </ul>
                    </div>
                </div>
            </div>

            <div class="proTab">
                <div style="position: relative; top: 0px; left: 50%; margin-left: -480px; z-index: 1;" class="proTab_m clearfix">
                    <ul id="tab" class="float_l">
                        <li class="current" onclick="ga('send', 'event', '商品详细页', '商品详情', '049645-47108');">商品详情</li>
                        <li onclick="ga('send', 'event', '商品详细页', '商品尺寸', '049645-47108');">商品尺寸</li>                <li onclick="ga('send', 'event', '商品详细页', '配送及售后', '049645-47108');">配送及售后</li>
                    </ul>
                </div>
            </div>
            <div id="product_con">
                <div class="tabCon" style="display:block">
                    <div class="proConBox">
                        <div class="tabTitle"><p class="t_m1"></p><p>商品信息</p></div>
                        <table class="proTable" border="1" bordercolor="#e6e6e6">
                            <tbody>
                                <tr><th>美西编号：</th><td>049645</td></tr>
                                <tr><th>货　　号：</th><td>30T3GLMM2L 085</td></tr>  
                                <tr><th>材　　质：</th><td>牛皮</td></tr> 
                                <tr><th>颜　　色：</th><td>白色</td></tr>
                                <tr><th>产　　地：</th><td>中国</td></tr>
                                <tr><th>商品内部：</th><td>米色Logo纹织布内里，一个拉链袋</td></tr>
                                <tr><th>商品外部：</th><td>白色色压纹牛皮材质，单肩包款式，袋口拉链闭合，一根长肩带，品牌Logo饰</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="proConBox">
                        <div class="tabTitle"><p class="t_m2"></p><p>品牌故事</p></div>
                        <div class="proBrand_l" style="width: 275px">
                            <img src="/Public/Home/img/62.jpg" />
                            <table class="type_input" style="width: 275px;display: block;">
                                <tbody style="width: 275px;display: block;">
                                    <tr style="width: 275px;"><td>中文名：</td><td>迈克高仕</td></tr>                           
                                    <tr style="width: 275px;"><td>英文名：</td><td>Michael Kors</td></tr>
                                    <tr style="width: 275px;"><td>创建于：</td><td>1981</td></tr>
                                    <tr style="width: 275px;"><td>发源地：</td><td>美国</td></tr>
                                    <tr style="width: 275px;"><td>创始人：</td><td style=" display: inline-block; width: 214px;white-space: nowrap; text-overflow: ellipsis;">Michael Kors</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="proBrand_r">
                            <p>迈克高仕(Michael Kors)是美国著名时装设计师迈克·柯尔(Michael 
                                Kors)的个人同名品牌。设计师迈克·柯尔(Michael 
                                Kors)是个极简主义者，他的设计风格简约明朗，喜爱运用高级面料缝制服装，开司米针织款式是他的拿手好戏，还擅长设计名贵运动服，是位不脱离现实的幻
                                想家，钟情巴黎的纽约人，凭自成一格的设计，赢得了世人瞩目。迈克高仕(Michael 
                                Kors)品牌将时髦、舒适、性感和运动风融合在一起，打造出优雅、随性、华丽的魅力。</p>
                            <a class="moreBrandCon" href="/brands/Michael+Kors.html" target="_blank">查看更多品牌商品</a>
                        </div>
                    </div>
                    <div class="proConBox">
                        <div class="tabTitle">
                            <p class="t_m3"></p>
                            <p>商品详情</p>
                        </div>
                        <div class="proImg">
                            <ul class="clearfix">
                                <li><img src="/Public/Home/img/h-049645-1.jpg" width="430" /></li>
                                <li><img src="/Public/Home/img/h-049645-2.jpg" width="430" /></li>
                                <li><img src="/Public/Home/img/h-049645-3.jpg" width="430" /></li>
                                <li><img src="/Public/Home/img/h-049645-4.jpg" width="430" /></li>
                                <li><img src="/Public/Home/img/h-049645-5.jpg" width="430" /></li>
                                <li><img src="/Public/Home/img/h-049645-6.jpg" width="430" /></li>
                                <li><img src="/Public/Home/img/h-049645-7.jpg" width="430" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 猜你喜欢-->
            <div class="cnxh clearfix" style="margin-top: 20px;">
                <div class="bt" style="margin-bottom: 10px;">
                    <h2 style="text-align: center; font-weight: bold; color: black; font-family: '微软雅黑'; font-size: 22px; margin-bottom: 6px;">Guess You Like</h2>
                    <p style=" width: 50px; border-top:1px black solid;ext-align: center; margin: 0 auto; padding-top: 7px;">猜你喜欢</p>
                </div>
                <div class="dycommodity">
                    <ul class="clearfix"><li><a onclick="proClick('044565', '红·华伦天奴', '服饰', 'Red Valentino', '多色', 0, '商品详细页');
                            ga('send', 'event', '商品详细页', 'Guess', '044565-42025')" title="Red Valentino红·华伦天奴Valentino Red 涤纶 女士 长裙" target="_blank" href="/product/detail/id/044565/saleid/42025.html"><img alt="" src="/Public/Home/img/q-044565-1.jpg" width="160" /><br /><div class="pro_recommend_name"><span>Red Valentino 红·华伦天奴</span><br /><span>Valentino Red 涤纶 女士 长裙</span></div></a></li><li><a onclick="proClick('058354', '博柏利', '配饰', 'Burberry', '多色', 1, '商品详细页');ga('send', 'event', '商品详细页', 'Guess', '058354-55818')" title="Burberry博柏利牛皮拼接织布 女士 长钱包" target="_blank" href="/product/detail/id/058354/saleid/55818.html"><img alt="" src="/Public/Home/img/q-058354-1.jpg" width="160" /><br /><div class="pro_recommend_name"><span>Burberry 博柏利</span><br /><span>牛皮拼接织布 女士 长钱包</span></div></a></li><li><a onclick="proClick('024840', '普拉达', '服饰', 'Prada', '多色', 2, '商品详细页');ga('send', 'event', '商品详细页', 'Guess', '024840-22481')" title="Prada普拉达多色几何印花全棉男士长袖衬衣" target="_blank" href="/product/detail/id/024840/saleid/22481.html"><img alt="" src="/Public/Home/img/q-024840-1.jpg" width="160" /><br /><div class="pro_recommend_name"><span>Prada 普拉达</span><br /><span>多色几何印花全棉男士长袖衬衣</span></div></a></li><li><a onclick="proClick('056754', '普拉达', '鞋履', 'Prada', '银色', 3, '商品详细页');ga('send', 'event', '商品详细页', 'Guess', '056754-54218')" title="Prada普拉达漆皮 女士 凉拖" target="_blank" href="/product/detail/id/056754/saleid/54218.html"><img alt="" src="/Public/Home/img/q-056754-1.jpg" width="160" /><br /><div class="pro_recommend_name"><span>Prada 普拉达</span><br /><span>漆皮 女士 凉拖</span></div></a></li><li><a onclick="proClick('033970', '蔻驰', '配饰', 'Coach', '桃红色', 4, '商品详细页');ga('send', 'event', '商品详细页', 'Guess', '033970-31450')" title="Coach蔻驰Madison 漆皮 女士 长钱包" target="_blank" href="/product/detail/id/033970/saleid/31450.html"><img alt="" src="/Public/Home/img/q-033970-1.jpg" width="160" /><br /><div class="pro_recommend_name"><span>Coach 蔻驰</span><br /><span>Madison 漆皮 女士 长钱包</span></div></a></li></ul></div>
            </div>
        </div>

        <!--其余底部-->
        <style type="text/css">
            .foot_bread {height:32px; padding-top:8px; _height:30px; _padding-top:10px; border-top:1px solid #ccc; line-height:2; position:relative;}
            .foot_bread_m {height:20px; overflow:hidden;}
            .foot_bread_sel {position:absolute; z-index:5; top:40px; left:0; display:none;}
            .foot_bread_sel_m {width:380px; height:114px; padding:10px 10px 10px 0; overflow-y:scroll; background:#fff; border:solid 1px #ccc;}
            .foot_bread_sel_m ul {margin-left:10px; width:170px;}
            .foot_bread_sel_m ul li {width:170px; word-break:normal�; word-wrap:normal�; overflow:hidden; white-space:nowrap; -o-text-overflow:ellipsis; text-overflow:ellipsis;}
            .bread_sj {width:16px; height:9px; background:url(/Public/Home/img/bread.gif) no-repeat; position:absolute; top:-8px; left:100px;}
            .safe_certification {overflow:hidden; width:135px; margin:0 auto;}
            .safe_certification a {display:block; height:35px; overflow:hidden;}
            .safe_certification .smrz {padding-top:2px;}
        </style>
        <div id="footer">
            <!--帮助栏-->
            <div class="foot_bread">
                <div class="foot_bread_m"><a href="/">美西奢侈品网</a> &gt; <a href="/brands">奢侈品牌导购</a> &gt; <a class="foot_bread_cur" href="/brands/Michael+Kors.html">迈克高仕Michael Kors ▼ </a> &gt; <a href="/brands/14-62-0-0-0-60-0-1-0-0.html">迈克高仕Michael Kors单肩包</a><br /><a href="/woman">女款</a> &gt; <a href="/woman/0-62-0-0-0-60-1-0.html">迈克高仕Michael Kors女款</a> &gt; <a href="/woman/14-0-0-0-0-60-1-0.html">女款单肩包</a> &gt; <a href="/woman/14-62-0-0-0-60-1-0.html">迈克高仕Michael Kors女款单肩包</a></div>
                <div class="foot_bread_sel">
                    <div class="bread_sj"></div>
                    <div class="foot_bread_sel_m">
                        <ul class="float_l">
                            <li><a href="/brands/27-62-0-0-0-60-0-1-0-0.html" title="迈克高仕Michael Kors旅行包" target="_blank">迈克高仕Michael Kors旅行包</a></li><li><a href="/brands/16-62-0-0-0-60-0-1-0-0.html" title="迈克高仕Michael Kors手拿包" target="_blank">迈克高仕Michael Kors手拿包</a></li><li><a href="/brands/15-62-0-0-0-60-0-1-0-0.html" title="迈克高仕Michael Kors斜挎包" target="_blank">迈克高仕Michael Kors斜挎包</a></li><li><a href="/brands/13-62-0-0-0-60-0-1-0-0.html" title="迈克高仕Michael Kors手提包" target="_blank">迈克高仕Michael Kors手提包</a></li>                            </ul>
                        <ul class="float_l">
                            <li><a href="/brands/14-1-0-0-0-60-0-1-0-0.html" title="阿玛尼Armani单肩包" target="_blank">阿玛尼Armani单肩包</a></li><li><a href="/brands/14-2-0-0-0-60-0-1-0-0.html" title="巴黎世家Balenciaga单肩包" target="_blank">巴黎世家Balenciaga单肩包</a></li><li><a href="/brands/14-3-0-0-0-60-0-1-0-0.html" title="巴利Bally单肩包" target="_blank">巴利Bally单肩包</a></li><li><a href="/brands/14-4-0-0-0-60-0-1-0-0.html" title="葆蝶家Bottega Veneta单肩包" target="_blank">葆蝶家Bottega Veneta单肩包</a></li><li><a href="/brands/14-5-0-0-0-60-0-1-0-0.html" title="博柏利Burberry单肩包" target="_blank">博柏利Burberry单肩包</a></li><li><a href="/brands/14-7-0-0-0-60-0-1-0-0.html" title="香奈儿Chanel单肩包" target="_blank">香奈儿Chanel单肩包</a></li><li><a href="/brands/14-8-0-0-0-60-0-1-0-0.html" title="蔻依Chloe单肩包" target="_blank">蔻依Chloe单肩包</a></li><li><a href="/brands/14-9-0-0-0-60-0-1-0-0.html" title="迪奥Dior单肩包" target="_blank">迪奥Dior单肩包</a></li><li><a href="/brands/14-10-0-0-0-60-0-1-0-0.html" title="杜嘉班纳Dolce&amp;Gabbana单肩包" target="_blank">杜嘉班纳Dolce&amp;Gabbana单肩包</a></li><li><a href="/brands/14-11-0-0-0-60-0-1-0-0.html" title="芬迪Fendi单肩包" target="_blank">芬迪Fendi单肩包</a></li>                            </ul>
                        <div class="clear"></div>
                    </div>
                </div>          
            </div>        
            <div class="help_intro index_help_intro clearfix">
                <ul style="margin-left:0px;">
                    <li class="intro_t">购物指南</li>
                    <li><a target="_blank" href="/services/shoppingGuide.html" rel="nofollow">购物流程</a></li>
                    <li><a target="_blank" href="/services/shipping.html" rel="nofollow">配送方式</a></li>
                </ul>
                <ul>
                    <li class="intro_t">支付方式</li>
                    <li><a target="_blank" href="/services/payOnline.html" rel="nofollow">如何付款</a></li>
                    <li><a target="_blank" href="/services/receipt.html" rel="nofollow">发票制度</a></li>
                </ul>
                <ul>
                    <li class="intro_t">商品说明</li>
                    <li><a target="_blank" href="/services/clothSize.html" rel="nofollow">商品尺码</a></li>
                    <li><a target="_blank" href="/services/packaging.html" rel="nofollow">商品包装</a></li>
                </ul>
                <ul>
                    <li class="intro_t">客服中心</li>
                    <li><a target="_blank" href="/services/service.html" rel="nofollow">七天退换</a></li>
                    <li><a target="_blank" href="/services/FAQ.html" rel="nofollow">常见问题</a></li>
                </ul>
                <ul class="foot_lbd" style="width:200px;">
                    <li style="padding-top: 13px;"><span>订购热线<br /><span class="con_num">4000-250-630</span></span></li>
                </ul>
                <ul class="foot_lbd" style="width:185px;">
                    <li style="padding:0; padding-top: 4px;">
                        <span>订阅美西时尚资讯</span>
                        <form onsubmit="return false;" style="margin-top: 4px;">
                            <input id="rssIn" class="input_large_en" value="请填写您的E-mail" style="color:#999; font-size:12px;" type="text" /><br />
                            <button class="rss_button" onclick=" return selectRss();">订&nbsp;阅</button>
                        </form>
                    </li>
                </ul>
                <ul class="foot_lbd" style="width:190px;">
                    <li>
                        <div class="float_l" style="margin-top: -12px;">
                            <p class="ewm_p">美西时尚APP</p>
                            <a class="foot_focus" href="/app" title="美西APP" rel="nofollow" target="_blank"><img src="/Public/Home/img/ewm_wx.png" width="72" /></a>
                        </div>
                        <div class="float_l" style="margin-top: -12px;">
                            <p class="ewm_p">关注我们</p>
                            <a href="/iphone/MicroMessage.html" title="美西微信" rel="nofollow" target="_blank"><img src="/Public/Home/img/ewm_indexBot1.png" width="72" /></a>
                        </div>
                        <div class="clear"></div>
                    </li>
                </ul>
            </div>        
            <!--底部导航-->
            <div class="sub_nav">
                <ul class="clearfix">
                    <li><a href="/">首页</a></li>
                    <li><a target="_blank" href="/services/about.html" rel="nofollow">关于美西</a></li>
                    <li><a target="_blank" href="/services/media.html" rel="nofollow">媒体报道</a></li>
                    <li><a target="_blank" href="/services/qualityAssurance.html" rel="nofollow">正品保证</a></li>
                    <li><a target="_blank" href="/services/coop.html" rel="nofollow">业务合作</a></li>
                    <li><a target="_blank" href="/services/privacy.html" rel="nofollow">隐私声明</a></li>
                    <li><a target="_blank" href="/services/join.html" rel="nofollow">加入美西</a></li>
                    <li><a target="_blank" href="/services/sitemapBrands.html" title="美西奢侈品网站地图">网站地图</a></li>
                    <li><a target="_blank" href="/services/contacts.html" rel="nofollow">联系我们</a></li>
                </ul>
            </div>
            <!--友情链接-->
            <div class="links">
                <ul class="clearfix" style="width:580px;">
                    <li><a href="javascript:void(0);" onclick="relUrl('foot_a');" class="foot_a" rel="nofollow"></a></li>
                    <li> <a href="#" target="_blank" class="foot_d" rel="nofollow"></a></li>
                    <li style="margin-left:35px;" class="foot_e"></li>
                    <li><a target="_blank" href="#" class="foot_s" rel="nofollow"></a></li>
                    <li><a href="#" target="_blank" class="foot_f" rel="nofollow"></a></li>
                    <li style="margin-left:15px;"><a href="/app" class="foot_j" target="_blank" rel="nofollow"></a></li>
                    <li><a href="/services/membership.html" target="_blank" class="foot_l" rel="nofollow">MEICI · CLUB</a></li>
                </ul>
            </div>        
            <!--版权信息-->
            <div class="copyright">
                <p>Copyright © 2008-2016 美西时尚-<a href="/">高端时尚生活电商</a></p>
                <p><a href="#" target="_blank">沪ICP备09001221号</a></p>
            </div>
            <div class="safe_certification">
                <a target="_blank" key="552f7547efbfb06dd6db7574" logo_size="83x30" logo_type="business" href="#" style="float:left; margin-top:3px;"><b id="aqLogoQHLHI" style="display: none;"></b><img style="border: none;" alt="安全联盟认证" src="/Public/Home/img/hy_83x30.png" height="30" width="83" /></a>
                <a class="ssgs float_r" href="#" rel="nofollow" target="_blank"><img src="/Public/Home/img/ssgs.gif" border="0" /></a>
            </div>
        </div>
        <!--其余底部结束-->
    </body>
</html>