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
use think\Db;
use think\Cache;
class Shop extends Common
{
    /**
     * 显示商品列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //商品列表
        $goodsList = cache('goodsList');
        if(!$goodsList){
            $goodsList = Db::name('goods')
                ->alias('a')
                ->join('goods_content b','a.id = b.goods_id','LEFT') //商品详情副表
                ->field('a.id,a.goods_cate_id,a.goods_name,a.goods_price,a.goods_vip,a.goods_thumb,b.goods_sales , b.goods_id,b.goods_putaway,b.goods_recommend,b.goods_collect,b.goods_inventory')
                ->where('b.goods_putaway',1)
                // ->paginate(15);
                ->select();
            cache('goodsList',$goodsList,3600);
        }
        //商品分类
        $Catedata =Db('goods_cate')->select();
        $Cate = new \app\index\model\GoodsCate();
        $goodsCate =$Cate->Cate($Catedata);
        //商品收藏,再次觉得把商品表分离是败笔，搞得判断是否收藏那么麻烦
        $collect_data = db('goods_collect')->where('user_id' , session('user_id'))->field('goods_id')->select();
        $collect = array_column($collect_data,'goods_id');

        //侧栏推荐商品
        $goodsVice = Db::name('goods')
            ->alias('a')
            ->join('goods_content b', 'a.id = b.goods_id','LEFT')
            ->limit('3')
            ->where('b.goods_putaway','1')
            ->select();
        $this->assign([
            'goodsCate' => $goodsCate,
            'goodsVice' => $goodsVice,
            'goodsList' => $goodsList,
            'collect' => $collect,
        ]);
        return $this-> fetch('shop/shop');
    }

    /**
     * 显示分类商品列表
     * 脑子进了水，把详情表分离了还不想改
     * @return \think\Response
     */
    public function shopList()
    {

        $CateId = input('id');
        if(empty($CateId)){
            $this->error('商品分类id不存在','shop/index');
        }
        //商品详情
        $goodsList = Db('goods')
            ->alias('a')
            ->join('goods_content b','a.id = b.goods_id')
            ->field('a.id,a.goods_cate_id,a.goods_name,a.goods_price,a.goods_vip,a.goods_thumb,b.goods_sales , b.goods_id,b.goods_putaway,b.goods_recommend,b.goods_collect')
            ->where('goods_cate_id',$CateId)
            ->where('b.goods_putaway',1)
            ->paginate(15);
        //商品分类
        $Catedata =Db('goods_cate')->select();
        $Cate = new \app\index\model\GoodsCate();
        $goodsCate =$Cate->Cate($Catedata);
        //商品收藏,再次觉得把商品表分离是败笔，搞得判断是否收藏那么麻烦
        $collect_data = db('goods_collect')->where('user_id' , session('user_id'))->field('goods_id')->select();
        $collect = array_column($collect_data,'goods_id');
        //侧栏推荐商品
        $goodsVice = Db::name('goods')
            ->alias('a')
            ->join('goods_content b', 'a.id = b.goods_id','LEFT')
            ->limit('3')
            ->where('b.goods_putaway','1')
            ->select();
        $this->assign([
            'goodsCate' => $goodsCate,
            'goodsVice' => $goodsVice,
            'goodsList' => $goodsList,
            'collect' => $collect,
        ]);
        return $this-> fetch('shop/shopList');
    }

    /**
     * 加入购物车
     */
    public function add_cart()
    {
        //检查用户是否已经登录
        $user_id = session('user_id');
        if (empty($user_id)) {
            return json(array('status' => 0, 'msg' => '请先登录账号'));
        }
        $data = $this->request->post();
        if (empty($data) && !request()->isAjax()) {
            return json(array('status' => 0, 'msg' => '请求类型错误'));
        }
        //验证
        $validate = new \think\Validate([
            ['goods_count', 'require', '商品数量必填'],
            ['goods_count', 'number', '商品数量格式只能为数字'],
            ['goods_id', 'require', '商品id必填'],
            ['goods_id', 'number', '商品id格式只能为数字'],
        ]);
        //验证部分数据合法性
        if (!$validate->check($data)) {
            $this->error('加入购物车失败：' . $validate->getError());
        }
        $goods_data = Db('goods_content')->where('goods_id',$data['goods_id'])->field('goods_inventory,goods_putaway')->find();
        //判断商品是否下架
        if($goods_data['goods_putaway'] == '0'){
            return json(array('status' => 0, 'msg' => '该商品已经下架'));
        }
        //判断规格库存
        if($goods_data['goods_inventory'] < $data['goods_count']){
            return json(array('status' => 0, 'msg' => '该商品库存不足，请重新选择'));
        }
        //判断该用户购物车是否存在此商品
        $where = array('user_id' => $user_id,'goods_id' => $data['goods_id']);
        $isCart = db('cart')->where($where)->field('user_id,goods_id,id,goods_count')->find();
        if ($isCart) {
            //判断规格库存
            if($goods_data['goods_inventory'] < $data['goods_count']+$isCart['goods_count']){
                return json(array('status' => 0, 'msg' => '该商品购物车数量超过商品库存，请重新选择'));
            }
            $upAddCart = array('update_time' => time(), 'goods_count' => $data['goods_count']+$isCart['goods_count']);
            $upwhere = array('user_id' => $user_id,'goods_id' => $data['goods_id']);
            $res = Db('cart')->where($upwhere)->update($upAddCart);
            if ($res) {
                return json(array('status' => 1, 'msg' => '加入购物车成功'));
            } else {
                return json(array('status' => 0, 'msg' => '加入购物车失败'));
            }
        } else {
            $data['create_time'] = time();
            $data['user_id'] = $user_id;
            $res = Db('cart')->insert($data);
            if ($res) {
                return json(array('status' => 1, 'msg' => '加入购物车成功'));
            } else {
                return json(array('status' => 0, 'msg' => '加入购物车失败'));
            }
        }

    }


}
