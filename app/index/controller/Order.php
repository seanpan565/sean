<?php
// +----------------------------------------------------------------------
// | Author [ 小钻风 ]
// +----------------------------------------------------------------------
// | Time:2019-11-9
// +----------------------------------------------------------------------
// | Blog ( http://www.seanpan.top )
// +----------------------------------------------------------------------
// | Email: < seanpan565@gmail.com >
// +----------------------------------------------------------------------
namespace app\index\controller;
use think\captcha\Captcha;
use think\Db;
use think\Cookie;
use think\Session;
use app\index\model\Order as OrderModel;
use hupisdk\api;
use app\index\controller\Common;
class Order extends Common
{
    /**
	 * 购物车进入确认订单页
	 */
	public function cart ()
	{
        //检查用户是否已经登录
        $this->checkLogin();
		//获取购物车数据
        $OrderModel = new OrderModel();
        $data = $OrderModel->disCart();
        //获取用户地址
        $this->getUserAddress();
        $this->assign([
            'data' => $data,
        ]);
        return $this->fetch();
    }

    /**
     * 从购物车提交订单
     */
    public function cartDo()
    {
        //检查用户是否已经登录
        $this->checkLogin();
		$cartForm = $this->request->param();
		//获取购物车数据
        $OrderModel = new OrderModel();
        $cart_data = $OrderModel->disCart();
        //购物车商品
        $data = $cart_data[0];
        //总价
		$order_price = $cart_data[1];
        //收货地址id
		$address_id = $cartForm['address_id'];
        //检查用户地址
		$user_address_one = $OrderModel->checkUserAddress($address_id, $data);

		//支付方式
		$pay_type = '2';
		$this->makeOrder($data, $order_price, $user_address_one, $cartForm['order_msg'], 'cart', $pay_type);
    }


    //立即购买订单确认页显示
    public function buy()
    {
        //检查用户是否已经登录
        $this->checkLogin();
		$goods_id = input('goods_id', 0, 'intval');
		$goods_count = input('goods_count', 0, 'intval');
        $OrderModel = new OrderModel();
        $data = $OrderModel->getBuyData($goods_id,$goods_count);

        //获取用户地址
        $this->getUserAddress();
        $this->assign([
            'data' => $data,
			'goods_id' => $goods_id,
			'goods_count' => $goods_count,
        ]);
        return $this->fetch();

    }


    //立即购买确认处理
    public function buyDo()
    {

		//检查用户是否已经登录
        $this->checkLogin();
		$buyForm = $this->request->param();
		//检查用户是否已经登录
		$this->checkLogin();

        if (!$buyForm['goods_id'] && !$buyForm['goods_count']) {
        	$this->error("创建订单失败",'index/index');
        }
		$OrderModel = new OrderModel();
		$buy_data = $OrderModel->getBuyData($buyForm['goods_id'],$buyForm['goods_count']);

        //立即购买商品
        $data = $buy_data[0];
        //总价
		$order_price = $buy_data[1];
        //收货地址id
		$address_id = $buyForm['address_id'];
        //检查用户地址
		$user_address_one = $OrderModel->checkUserAddress($address_id, $data);

        //支付方式
		$pay_type = '2';
		$this->makeOrder($data, $order_price, $user_address_one, $buyForm['order_msg'], 'buy', $pay_type);

    }

	/**
	 * 订单付款
	 */
	public function orderPay()
	{
		$order_sn = $this->request->param();
		$order_sn = implode($order_sn);
		//主订单不存在
		$main_data = db('order_main')->where('order_sn',$order_sn)->find();
		if (empty($main_data)) {
			return $this->error('主订单不存在');
		}
		//判断订单是否存在
		$order_one = db('order')->where('order_sn',$order_sn)->find();
		if (empty($order_one)) {
			return $this->error('订单不存在');
		}
		//订单状态
		if ($order_one['order_status'] != 0) {
			return $this->error('订单状态错误');
		}

		$this->hupiPay($main_data);


	}


    /**生成订单，插入三张表，删除一张表
	 * @param $data as $order_goods
	 * @param $order_price
	 * @param $user_address_one
	 * @param string $type是否为购物车提交
	 */
	private function makeOrder ($order_goods, $order_price, $user_address_one, $order_msg, $type, $pay_type)
	{
		//订单编号
		$csn_new = date("Ymdhis").substr(str_shuffle('1234567890'), 0, 6);
		//订单表
		$order_data = array(
			'order_sn' => $csn_new,
			'user_id' => session('user_id'),
			'order_source' => 0,
			'order_status' => 0,
			'pay_status' => 0,
			'pay_type' => $pay_type,  //pay_type支付方式默认为微信，后期添加其他支付方式时方便
			'pay_amount' => $order_price,
			'real_amount' => $order_price,
			'create_time' => time(),
			'address_name' => $user_address_one['address_name'],
			'address_phone' => $user_address_one['address_phone'],
			'address_site' => $user_address_one['address_site'],
			'order_msg' => $order_msg,  //订单留言
			'order_ip' => get_client_ip(),
		);

		//$order_goods订单商品数据
		foreach($order_goods as $k => $v){
		    $order_goods[$k]['user_id'] = session('user_id');
			$order_goods[$k]['order_sn'] = $csn_new;
			//是否为购物车提交
			if ($type == "cart") {
				$cart_ids[] = $v['cart_id'];
			}else{
				$cart_ids[] = '';
			}
			unset($order_goods[$k]['goods_keyword']);
			unset($order_goods[$k]['goods_inventory']);
			unset($order_goods[$k]['goods_putaway']);
			unset($order_goods[$k]['cart_status']);
			unset($order_goods[$k]['cart_id']);
		}

		//主订单
		$main_data = array(
			'order_sn' => $csn_new,
			'user_id' => session('user_id'),
			'order_status' => 0,
			'pay_type' => 2,
			'order_price' => $order_price,
			'create_time' => time(),
		);

        //开启事务
	    Db::startTrans();
	    try{
			$order_dataRes = Db::table('sean_order')->insert($order_data);//订单表
			$order_goodsRes = Db::table('sean_order_goods')->insertAll($order_goods);//订单商品表
			$main_dataRes = Db::table('sean_order_main')->insert($main_data);//订单主表
	    }catch (\think\Exception\DbException $exception){
	        Db::rollback();
	    }
	    if($order_dataRes && $order_goodsRes && $main_dataRes){
	        Db::commit();
			//删除购物车商品表
			if ($cart_ids) {
				$cart_id = implode($cart_ids , ',');
				Db::table('sean_cart')->delete($cart_id);
			}
			//微信支付
			if ($pay_type == 2) {
				$this->hupiPay($main_data);
			}
	    }else{
	        Db::rollback();
	        $this->error("创建订单失败",'index/index');
	    }

    }



	/**
	 * 虎皮椒微信扫码支付
	 */
    public function hupiPay($main_data)
	{
        //从数据库中取
        $hupiwx = db('hupi')->where('pay_type','2')->find();
		$appid  = $hupiwx['appid'];//账户，
		$appsecret = $hupiwx['appsecret'];//密匙，
        $title = $hupiwx['title']; //二维码上的标题
        $my_plugin_id = $hupiwx['my_plugin_id']; //根据自己需要自定义插件ID

        //用户付款成功后，我们会在先通过notify_url接口，通知您服务器付款成功，然后引导用户跳转到return_url网址。
		$data = array(
		    'version'   => '1.1',//固定值，api 版本，目前暂时是1.1
		    'lang'       => 'zh-cn', //必须的，zh-cn或en-us 或其他，根据语言显示页面
		    'appid'     => $appid, //必须的，APPID
		    'trade_order_id' => $main_data['order_sn'], //必须的，请确保在当前网站内是唯一订单号，匹配[a-zA-Z\d\-_]+
		    'payment'   => 'wechat',//必须的，支付接口标识：wechat(微信接口)|alipay(支付宝接口)
		    'total_fee' => '0.1',//人民币，单位精确到分
		    'title'     => $title, //必须的，订单标题，长度32或以内
		    'time'      => time(),//必须的，当前时间戳，根据此字段判断订单请求是否已超时，防止第三方攻击服务器
		    'notify_url' => 'http://www.leylgt.info/index/order/hupinotify', //用户支付成功后，我们服务器会主动发送一个post消息到这个网址(注意：当前接口内，SESSION内容无效)
			'modal' => null, //可空，支付模式 ，可选值( full:返回完整的支付网页; qrcode:返回二维码; 空值:返回支付跳转链接)
		    'nonce_str' => str_shuffle(time()),//必须的，随机字符串，作用：1.避免服务器缓存，2.防止安全密钥被猜测出来
			//选填
			'plugins'   => $my_plugin_id,//必须的，根据自己需要自定义插件ID，唯一的，匹配[a-zA-Z\d\-_]+
			'return_url' => 'http://www.leylgt.info/index/user_order',//必须的，支付成功后的跳转地址
			'callback_url' => 'http://www.leylgt.info/index/index/index',//必须的，用户取消支付后，我们可能引导用户跳转到这个网址上重新进行支付
		);
        //哈希签名，参考微信的
		$hashkey = $appsecret;
		$data['hash'] = Api::generate_xh_hash($data,$hashkey);
		/**
		 * 个人支付宝/微信官方支付，支付网关：https://api.xunhupay.com
		 * 微信支付宝代收款，需提现，支付网关：https://pay.wordpressopen.com
		 */
		//跳转地址
		$url = 'https://api.xunhupay.com/payment/do.html';

		try {
		    $response = Api::http_post($url, json_encode($data));
		    /**
		     * 支付回调数据
		     * @var array(
		     *      order_id,//支付系统订单ID
		     *      url//支付跳转地址
		     *  )
		     */
		    $result = $response?json_decode($response,true):null;
		    if(!$result){
		        throw new Exception('Internal server error',500);
		    }

		    $hash = Api::generate_xh_hash($result,$hashkey);
		    if(!isset( $result['hash'])|| $hash!=$result['hash']){
		        throw new Exception(__('Invalid sign!',XH_Wechat_Payment),40029);
		    }

		    if($result['errcode']!=0){
		        throw new Exception($result['errmsg'],$result['errcode']);
		    }

		    $pay_url =$result['url'];
		    header("Location: $pay_url");
		    exit;
		} catch (Exception $e) {
		    echo "errcode:{$e->getCode()},errmsg:{$e->getMessage()}";
		    //TODO:处理支付调用异常的情况
		}
	}


	/**
     * 虎皮椒微信扫码支付回调数据
     */
    public function hupinotify()
    {

		/**
		 * 回调数据
		 * @var array(
		 *       'trade_order_id'，商户网站订单ID
		         'total_fee',订单支付金额
		         'transaction_id',//支付平台订单ID
		         'order_date',//支付时间
		         'plugins',//自定义插件ID,与支付请求时一致
		         'status'=>'OD'//订单状态，OD已支付，WP未支付
		 *   )
		 */
        $hupiwx = db('hupi')->where('pay_type','2')->find();
		$appsecret = $hupiwx['appsecret'];//密匙，
		$my_plugin_id = $hupiwx['my_plugin_id']; //判断是否与请求发送的相等


        $data = input('post.');

		foreach ($data as $k=>$v){
		    $data[$k] = stripslashes($v);
		}
		if(!isset($data['hash'])||!isset($data['trade_order_id'])){
		   echo 'failed';exit;
		}

		//自定义插件ID,请与支付请求时一致
		if(isset($data['plugins'])&&$data['plugins']!=$my_plugin_id){
		    echo 'failed';exit;
		}

		//APP SECRET
		$appkey = $appsecret;
		$hash = Api::generate_xh_hash($data,$appkey);
		if($data['hash']!=$hash){
		    //签名验证失败
		    echo 'failed';exit;
		}

		//商户订单ID
		$trade_order_id =$data['trade_order_id'];

		if($data['status']=='OD'){
		    /************商户业务处理******************/
		    //TODO:此处处理订单业务逻辑,支付平台会多次调用本接口(防止网络异常导致回调失败等情况)
		    //     请避免订单被二次更新而导致业务异常！！！
		    //     if(订单未处理){
		    //         处理订单....
		    //      }

        	$store_money = $data['total_fee'];
			$trade_no = $data['transaction_id']; //支付平台订单ID
			$order_sn = $data['trade_order_id']; //商户网站订单ID
	        $order_time = time(); //支付时间

			//获取主订单数据
			$order_one = db('order_main')->where(array('order_sn' => $order_sn ,'order_status' => '0'))->find();
			if (empty($order_one)) {
				$order_one = db('order')->where(array('order_sn' => $order_sn ,'order_status' => '0'))->find();
				if (!empty($order_one)) {
					db('order')->where('order_sn', $order_sn)->update(array('pay_type' => 2, 'pay_status' => 1, 'order_status' => 1, 'trade_no' => $trade_no, 'pay_time' => $order_time));
				}
			}else{
				//更新主订单数据
				db('order_main')->where('order_sn', $order_sn)->update(array('order_status' => 1, 'trade_no' => $trade_no));
				//更新子订单
				db('order')->where('order_sn', $order_sn)->update(array('pay_type' => 2, 'pay_status' => 1, 'order_status' => 1, 'trade_no' => $trade_no, 'pay_time' => $order_time));

				//新增订单日志
				$order_log_data = array(
					'order_sn' => $order_sn,
					'user_id' => $order_one['user_id'],
					'order_status' => 1,
					'pay_status' => 1,
					'log_action' => '购买商品',
					'log_time' => time(),
					'order_money' => $store_money,
					'trade_no' => $trade_no,
				);
				db('order_log')->insert($order_log_data);

				//更新商品数据
				$goods_data = db('order_goods')->where('order_sn',$order_sn)->select();
				if (!empty($goods_data)) {
					foreach ($goods_data as $k => $v) {
						$goods_one = db('goods_content')->where('goods_id',$v['goods_id'])->field('goods_id,goods_inventory,goods_sales')->find();
						if ($goods_one['goods_inventory'] < $v['goods_count']) {
							$this->error('产品库存不足');
						} else {
							//更新销量和库存
							db('goods_content')->where('goods_id',$v['goods_id'])->update(array('goods_sales' => $goods_one['goods_sales']+$v['goods_count']));
							db('goods_content')->where('goods_id',$v['goods_id'])->update(array('goods_inventory' => $goods_one['goods_inventory']-$v['goods_count']));

							//统计商品成交量
							$this->statGoods($v['goods_id']);
						}
					}
				}else {
					$this->error('订单不存在');
				}

			}

		    /*************商户业务处理 END*****************/
		}else{
		    //处理未支付的情况

			$store_money = $data['total_fee'];
			$trade_no = $data['transaction_id']; //支付平台订单ID
			$order_sn = $data['trade_order_id']; //商户网站订单ID
			$order_time = time(); //支付时间

			//获取主订单数据
			$order_one = db('order_main')->where(array('order_sn' => $order_sn ,'order_status' => '0'))->find();
			//新增订单日志
			$order_log_data = array(
				'order_sn' => $order_sn,
				'user_id' => $order_one['user_id'],
				'order_status' => 1,
				'pay_status' => 1,
				'log_action' => '支付失败',
				'log_time' => time(),
				'order_money' => $store_money,
				'trade_no' => $trade_no,
			);
			db('order_log')->insert($order_log_data);

		}

		//以下是处理成功后输出，当支付平台接收到此消息后，将不再重复回调当前接口
		echo 'success';
		exit;

	}


	/**统计商品下单量
	 * @param $goods_id
	 */
	private function statGoods ($goods_id)
	{
		//统计每一天的时间
		$stat_time_start = strtotime(date('Y-m-d 00:00:00'));
		//统计每一天同一个商品下单量
		$stat_one = db('stat_goods')->where(array('stat_time' => $stat_time_start, 'goods_id' => $goods_id))->find();
		if (!empty($stat_one)) {
			db('stat_goods')->where(array('stat_time' => $stat_time_start, 'goods_id' => $goods_id))->update(array('stat_num' => 1));
		} else {
			$stat_data = array(
				'goods_id' => $goods_id,
				'stat_num' => 1,
				'stat_time' => $stat_time_start,
			);
			db('stat_goods')->insert($stat_data);
		}

		//统计每个月的商品
		$stat_time_month = strtotime(date('Y-m-1 00:00:00'));
		//统计每一天同一个商品下单量
		$stat_month_one = db('stat_goods_month')->where(array('stat_time' => $stat_time_start, 'goods_id' => $goods_id))->find();
		if (!empty($stat_month_one)) {
			db('stat_goods_month')->where(array('stat_time' => $stat_time_start, 'goods_id' => $goods_id))->update(array('stat_num' => 1));
		} else {
			$stat_month_data = array(
				'goods_id' => $goods_id,
				'stat_num' => 1,
				'stat_time' => $stat_time_month,
			);
			db('stat_goods_month')->insert($stat_month_data);
		}
	}




    /**
     * 获取用户地址
     */
    public function getUserAddress()
    {
        //收货地址
        $address = db('address')->where('user_id',session('user_id'))->select();
        //默认收货地址
        $default = db('address')->where(array('user_id'=>session('user_id'),'is_default' => '1'))->find();
        $this->assign([
            'address' => $address,
            'default' => $default,
        ]);
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
