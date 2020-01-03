<?php
// +----------------------------------------------------------------------
// | Author [ 小钻风 ]
// +----------------------------------------------------------------------
// | Time:2019-12-16
// +----------------------------------------------------------------------
// | Blog ( http://www.seanpan.top )
// +----------------------------------------------------------------------
// | Email: < seanpan565@gmail.com >
// +----------------------------------------------------------------------

namespace app\index\model;
use think\Db;
use think\Model;
class Order extends  model
{

    /**
	 * 处理购物车数据
	 */
	public function disCart ()
	{
        $cart_data = $this->getCartData();//处理购物车数据
        if (empty($cart_data)) {
            return false;
        }
        $goods_total = 0;//商品总价默认数
        foreach ($cart_data as $k => $v) {
            $goods_total += $cart_data[$k]['total_price'];
        }
        return array($cart_data, $goods_total);
    }


    /**
	 * 获取购物车数据
	 */
	private function getCartData ()
	{
        $result = array();
        $cart_goods = db('cart')->where(array('user_id' => session('user_id'),'cart_status' => '1'))->field('id,user_id,goods_id,goods_count,cart_status')->select();
        if (empty($cart_goods)) {
            $this->error('购物车暂无商品');
        }
        foreach ($cart_goods as $k => $v) {
            //获取商品信息
            $data = Db('goods')
                ->alias('a')
                ->join('goods_content c', 'a.id = c.goods_id','LEFT')
                ->field('a.goods_name ,a.goods_keyword ,a.goods_price ,a.goods_vip ,a.goods_thumb, a.goods_number ,c.goods_id,c.goods_inventory,c.goods_putaway')
                ->where(array('a.id' => $v['goods_id']))
                ->find();

            if (empty($data)) {
                continue;
            }

            //如果商品状态部位1或者库存为空
            if ($data['goods_putaway'] != 1 || empty($data['goods_inventory'])) {
                $v['cart_status'] = 0;
                continue;
            }

            $data['cart_status'] = $v['cart_status']; //购物车商品的状态等于获取购物车的状态
            $data['cart_id'] = $v['id']; //购物车商品的id等于获取购物车的id
            $data['goods_vip'] = sprintf('%.2f', $data['goods_vip']);  //商品的价格等于获取的商品价格
            $data['goods_count'] = $v['goods_count'] ? (int)$v['goods_count'] : 1;
            $data['total_price'] = sprintf('%.2f', $data['goods_vip'] * $data['goods_count']); //单件商品总价
            $result[] = $data;
        }
        return $result;

    }


	/**
	 * 获取立即购买的数据
	 * @param $goods_id
	 * @param $goods_count
	 */
	public function getBuyData ($goods_id,$goods_count)
	{
		$result = array();
		//获取商品信息
		$data = Db('goods')
			->alias('a')
			->join('goods_content c', 'a.id = c.goods_id','LEFT')
			->field('a.goods_name ,a.goods_keyword ,a.goods_price ,a.goods_vip ,a.goods_thumb ,c.goods_id ,c.goods_inventory ,c.goods_putaway')
			->where(array('a.id' => $goods_id))
			->find();
		if (empty($data)) {
            return false;
        }
        $goods_total = 0;//商品总价默认数
		$goods_total = $data['goods_vip'] * $goods_count;
		$data['goods_count'] = $goods_count;
		$data['total_price'] = $goods_total;
		$result[] = $data;

		return array($result, $goods_total);

	}


	/**检查用户地址
	 * @param $address_id
	 * @param $data
	 */
	public function checkUserAddress ($address_id, $data)
	{
        $user_address_one = db('address')->where('id',$address_id)->find();
		if (empty($user_address_one)) {
			$this->error('用户地址不正确');
		} elseif (empty($data)) {
			$this->error('请选择商品');
		}
		return $user_address_one;
	}





}
