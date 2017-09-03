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

    function tianjia() {
        $goods = D('goods');
//        $data = array(
//            'goods_name11' => 'test',
//            'aa'=> '123'
//        );
//        $ret = $goods->add($data);
//        dump($ret);

        //ac模式
//    $goods->goods_name = 'a';
//    $goods->goods_price = '123';
//    $newid = $goods->add();
//    dump($newid);
        if(IS_POST) {
           $data = I('post.');
           $data['goods_create_time'] = time();

           $newid = $goods->add($data);
//           dump($newid);
            if($newid) {
                $this->success('添加成功',U('showlist'),4);
            } else {
                $this->error('添加失败',U('tianjia'),2);
            }
        } else {

            $this->display();
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