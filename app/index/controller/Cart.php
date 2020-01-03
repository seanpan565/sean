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
class Cart extends Common
{
    /**
     * 显示购物车列表
     *
     */
    public function index()
    {
        //检查用户是否已经登录
        $this->checkLogin();
        $cart = $this->getCartData();
        $this->assign([
            'cart' => $cart,
        ]);
        return $this-> fetch('cart/cart');
    }

    /**
	 * 获取购物车数据
	 */
	private function getCartData ()
	{

        $cartData = Db('cart')
            ->alias('a')
            ->join('goods b', 'a.goods_id = b.id','LEFT')
            ->join('goods_content c', 'a.goods_id = c.goods_id','LEFT')
            ->field('a.id ,a.user_id ,a.goods_id , a.goods_count,a.cart_status, b.goods_name ,b.goods_keyword ,b.goods_price ,b.goods_vip ,b.goods_thumb,c.goods_id,c.goods_inventory')
            ->where('a.user_id',session('user_id'))
            ->select();
        return $cartData;
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

    /**
     * 更新购物车
     */
    public function up_cart()
    {
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
            ['id', 'require', '购物车商品id必填'],
            ['id', 'number', '购物车商品id格式只能为数字'],
        ]);
        //验证部分数据合法性
        if (!$validate->check($data)) {
            $this->error('修改购物车失败：' . $validate->getError());
        }

        $goods_data = Db('goods_content')->where('goods_id',$data['goods_id'])->field('goods_inventory')->find();
        //判断规格库存
        if($goods_data['goods_inventory'] < $data['goods_count']){
            return json(array('status' => 0, 'msg' => '该商品库存不足，请重新选择'));
        }
        $upCart = array('update_time' => time(), 'goods_count' => $data['goods_count']);
        $upwhere = array('user_id' => session('user_id'),'goods_id' => $data['goods_id']);
        $res = Db('cart')->where($upwhere)->update($upCart);
        if ($res) {
            return json(array('status' => 1, 'msg' => '更新购物车成功'));
        } else {
            return json(array('status' => 0, 'msg' => '更新购物车失败'));
        }
    }

    /**
     * 删除购物车商品
     */
    public function del_cart()
    {
        $cart_id = input('cart_id');
        $where = array('id' => $cart_id , 'user_id' => session('user_id'));
        $res = db('cart')->where($where)->delete();
        if ($res) {
            return json(array('status' => 1, 'msg' => '删除购物车商品成功'));
        } else {
            return json(array('status' => 0, 'msg' => '删除购物车商品失败'));
        }


    }


    /**
     * 更新购物车商品状态
     */
    public function cart_status()
    {
        $cart_id = input('cart_id');
        $where = array('id' => $cart_id , 'user_id' => session('user_id'));
        $res = db('cart')->where($where)->field('id,user_id,cart_status')->find();
        if ($res['cart_status'] == 1) {
            db('cart')->where($where)->update(['cart_status' => '0']);
            return json(array('status' => 1, 'msg' => '更新购物车商品状态'));
        } else {
            db('cart')->where($where)->update(['cart_status' => '1']);
            return json(array('status' => 1, 'msg' => '更新购物车商品状态'));
        }


    }


    /**
     * 检查用户是否登录
     */
    private function checkLogin ()
    {
        if (empty(session('user_id'))) {
            $this->redirect('register/login');
        }
    }

}
