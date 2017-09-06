<?php
/**
 * Created by PhpStorm.
 * User: Lin
 * Date: 2017/9/1
 * Time: 21:00
 */
namespace Admin\Controller;
use Admin\Model\GoodsModel;
use Admin\Model\QqModel;
use Think\Controller;
use Think\Image;
use Think\Think;

class GoodsController extends Controller {
    function showlist() {
        $good = D('goods');
//        $info = $good->select();
//        $info = $good->select('12,13');

//        where 方法使用
        $info = $good->select();
//        dump($info);
//        $info = $good->where("goods_name like '诺%' and goods_price > 1000")->select();
//        $info = $good->where(array('goods_name' => array('like','诺%')))->select();
//        $info = $good->limit(1,2)->select();
//        $info = $good->field('goods_name')->select();
//        $info = $good->order('goods_price desc')->select();
//        $info = $good->field('goods_brand_id,count(*)')->group('goods_brand_id')->select();

        $this->assign('info',$info);

        $this->display();
    }


    function tianjia(){
        $goods = D('Goods');
        //两个业务逻辑：展示form表单、收集信息入库
        if(IS_POST){
            //收集信息入库
            //dump($_POST);
            $shuju = I('post.'); //通过I()函数收集form表单信息
            //该I()函数可以过滤非法的信息
            //在没有非法信息情况下，返回的信息与传递的信息完全一致
            $shuju['goods_create_time'] = time();
//            echo $_FILES['goods_logo']['error'];
//            exit;
            /************对附件图片进行处理************/
            if($_FILES['goods_logo']['error']===0){
                //1) 上传图片
                $cfg = array(
                    'rootPath'      =>  './Public/Upload/', //保存根路径
                );

                $up = new \Think\Upload($cfg);
                //uploadOne()方法会返回附件的"存储目录"和"名字信息"
                $z = $up -> uploadOne($_FILES['goods_logo']);
                //把附件存储到数据库(附件路径名存储给数据表记录)
                //./Public/Upload/2017-02-01/589148fb1293e.jpg
                $shuju['goods_big_img'] = $up->rootPath.$z['savepath'].$z['savename'];

                /*var_dump($shuju['goods_big_img']);
                exit;*/
                //2) 制作缩略图
                $im = new \Think\Image();//A.实例化Image对象
                $im -> open($shuju['goods_big_img']);//B.打开原图
                //$im -> thumb(70,70,1);//C.制作缩略图(等比例)
                $im -> thumb(70,70,6);//C.制作缩略图(固定尺寸)
                //D.保存制作好的缩略图
                //原图：./Public/Upload/2017-02-01/589148fb1293e.jpg
                //缩略图./Public/Upload/2017-02-01/small_589148fb1293e.jpg
                $smallPathName = $up->rootPath.$z['savepath'].'small_'.$z['savename'];
                $im -> save($smallPathName);
                //E. 存储缩略图路径名到数据库
                $shuju['goods_small_img'] = $smallPathName;
            }
            /************对附件图片进行处理************/

            $newid = $goods -> add($shuju);

            if($newid){
                //添加成功，页面跳转到商品列表页面去
                $this -> success('添加成功',U('showlist'),1);
            }else{
                //添加失败，给本身页面跳转
                $this -> error('添加失败',U('tianjia'),2);
            }
        }else{
            //展示form表单
            $this -> display();
        }
    }



    function upd() {
        $goods = D('Goods');
        if(IS_POST) {
            $goods_id = I('get.goods_id');
            $data = I('post.');

            $n = $goods->save($data);
            if ($n) {
                $this->success('修改成功',U('showlist'));
            } else {
                $this->error('修改失败',U('upd',array('goods_id' => $goods_id)));
            }

//          $n = $goods->where('goods_id='.$goods_id)->save($data);
        } else {
            $goods_id = I('get.goods_id');
            $info  = $goods->find($goods_id);
            $this->assign('info',$info);


            $this->display();
        }
    }
}