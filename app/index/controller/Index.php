<?php
// +----------------------------------------------------------------------
// | Author [ 小钻风 ]
// +----------------------------------------------------------------------
// | Time:2019-10-9
// +----------------------------------------------------------------------
// | Blog ( http://www.seanpan.top )
// +----------------------------------------------------------------------
// | Email: < seanpan565@gmail.com >
// +----------------------------------------------------------------------
namespace app\index\controller;
use app\index\controller\Common;
class Index extends Common
{
    public function index()
    {
        $goodsList = db('goods')
            ->alias('a')
            ->join('goods_content b','a.id = b.goods_id','LEFT') //商品详情副表
            ->field('a.id,a.goods_cate_id,a.goods_name,a.goods_price,a.goods_vip,a.goods_thumb,b.goods_sales ,b.goods_recommend, b.goods_id,b.goods_putaway,b.goods_recommend,b.goods_collect,b.goods_inventory')
            ->where(array('b.goods_putaway'=>1,'b.goods_recommend'=>'1'))
            ->limit(4)
            ->select();
        $article = db('article')->where('status','1')->field('id,title,thumb,status,is_top,read_count,create_time,description')->limit(4)->select();
        $this->assign([
            'article' => $article,
            'goodsList' => $goodsList,
        ]);
        return $this -> fetch('index/index');
    }


}
