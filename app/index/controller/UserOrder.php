<?php
// +----------------------------------------------------------------------
// | Author [ 小钻风 ]
// +----------------------------------------------------------------------
// | Time:2019-12-17
// +----------------------------------------------------------------------
// | Blog ( http://www.seanpan.top )
// +----------------------------------------------------------------------
// | Email: < seanpan565@gmail.com >
// +----------------------------------------------------------------------
namespace app\index\controller;
use think\Request;
use think\Db;
use app\index\model\UserOrder as UserOrderModel;
use app\index\controller\Common;
class UserOrder extends Common
{
    /**
     * 用户订单页显示
     */
    public function index ()
    {
        //检查用户是否登录
        $this->checkLogin();
        $orderdata = db('order')
            ->where([
                'user_id'  =>  ['=',session('user_id')],
                'order_status'    =>  ['<>','-1'],
            ])
            ->select();
        foreach ($orderdata as $k => $v) {
            $order_goods = db('order_goods')->where('order_sn',$v['order_sn'])->select();
            $orderdata[$k]['child'] = $order_goods;
        }
        $this->assign([
            'orderstatus' => '-2',
            'orderdata' => $orderdata,
        ]);

        return $this->fetch();
    }

    /**
     * 用户订单状态显示
     */
    public function order_status ()
    {
        $status = $this->request->param();
        $status = implode($status);
        // 0待付款,1待发货,2待收货,3待评价
        switch ($status){
        case '0':
            $where = array('user_id'=>session('user_id'), 'order_status'=>0);
            $orderdata = db('order')->where($where)->select();
            foreach ($orderdata as $k => $v) {
                $order_goods = db('order_goods')->where('order_sn',$v['order_sn'])->select();
                $orderdata[$k]['child'] = $order_goods;
            }
            $this->assign([
                'orderstatus' => '0',
                'orderdata' => $orderdata,
            ]);
            return $this->fetch('User_order/index');
            break;
        case '1':
            $where = array('user_id'=>session('user_id'), 'order_status'=>1);
            $orderdata = db('order')->where($where)->select();
            foreach ($orderdata as $k => $v) {
                $order_goods = db('order_goods')->where('order_sn',$v['order_sn'])->select();
                $orderdata[$k]['child'] = $order_goods;
            }
            $this->assign([
                'orderstatus' => '1',
                'orderdata' => $orderdata,
            ]);
            return $this->fetch('User_order/index');
            break;
        case '2':
            $where = array('user_id'=>session('user_id'), 'order_status'=>2);
            $orderdata = db('order')->where($where)->select();
            foreach ($orderdata as $k => $v) {
                $order_goods = db('order_goods')->where('order_sn',$v['order_sn'])->select();
                $orderdata[$k]['child'] = $order_goods;
            }
            $this->assign([
                'orderstatus' => '2',
                'orderdata' => $orderdata,
            ]);
            return $this->fetch('User_order/index');
            break;
        default:
            $where = array('user_id'=>session('user_id'), 'order_status'=>3);
            $orderdata = db('order')->where($where)->select();
            foreach ($orderdata as $k => $v) {
                $order_goods = db('order_goods')->where(array('order_sn'=>$v['order_sn']))->select();
                $orderdata[$k]['child'] = $order_goods;
            }
            $this->assign([
                'orderstatus' => '3',
                'orderdata' => $orderdata,
            ]);
            return $this->fetch('User_order/index');
        }
    }

    /**
     * 订单详情显示
     */
    public function order_details (){
        $order_sn = $this->request->param();
        $order_sn = implode($order_sn);
        $orderdata = db('order')->where('order_sn',$order_sn)->find();
        $order_goods = db('order_goods')->where('order_sn',$order_sn)->select();
        $this->assign([
            'order_goods' => $order_goods,
            'orderdata' => $orderdata,
        ]);
        return $this->fetch('User_order/order_details');
    }

    /**
     * 取消订单订单
     */
    public function order_call (){
        if (request()->isAjax()) {
            $data = $this->request->param();
            $order_sn = $data['order_sn'];
            $order_one = db('order')->where('order_sn',$order_sn)->field('order_sn,user_id,order_status,pay_status')->find();
            //判断订单是否存在
            if (empty($order_one)) {
                return json(array('status' => 0, 'msg' => '订单不存在'));
            }
            //订单状态
            if ($order_one['order_status'] != 0) {
                return json(array('status' => 0, 'msg' => '订单状态错误'));
            }
            if ($order_one['order_status'] == '-1') {
                return json(array('status' => 0, 'msg' => '该订单已删除'));
            }

            //开启事务
            Db::startTrans();
            try{
                $order_dataRes = Db::table('sean_order')->where(array('order_sn'=>$order_sn ,'user_id'=>session('user_id')))->update(array('order_status' => 5, 'cancel_time' => time()));//订单表
                $main_dataRes = Db::table('sean_order_main')->where(array('order_sn'=>$order_sn ,'user_id'=>session('user_id')))->update(array('order_status' => 5));//订单主表
            }catch (\think\Exception\DbException $exception){
                Db::rollback();
            }
            if($order_dataRes && $main_dataRes){
                Db::commit();
                //订单日志
                $order_log_data = array(
                    'order_sn' => $order_one['order_sn'],
                    'user_id' => $order_one['user_id'],
                    'order_status' => 5,
                    'pay_status' => $order_one['pay_status'],
                    'log_action' => '用户取消订单',
                    'log_time' => time(),
                );
                db('order_log')->insert($order_log_data);
                return json(array('status' => 1, 'msg' => '取消订单成功！'));
            }else{
                Db::rollback();
                return json(array('status' => 0, 'msg' => '取消订单失败！'));
            }


        } else {
            return json(array('status' => 0, 'msg' => '请求类型错误'));
        }

    }

    /**
     * 删除订单
     */
    public function order_del ()
    {
        if (!Request()->isAjax()) {
            return json(array('status' => 0, 'msg' => '请求类型错误！'));
        } else {
            $data = $this->request->param();
            $order_sn = $data['order_sn'];
            $order_one = db('order')->where(array('order_sn' => $order_sn))->field('order_sn,user_id,order_status,pay_status')->find();
            if (empty($order_one)) {
                return json(array('status' => 0, 'msg' => '该订单不存在！'));
            }

            //订单状态
            if ($order_one['order_status'] == '-1') {
                return json(array('status' => 0, 'msg' => '该订单已删除'));
            }

            //开启事务
            Db::startTrans();
            try{
                $order_dataRes = Db::table('sean_order')->where('order_sn',$order_sn)->update(array('order_status' => '-1'));//订单表
                $main_dataRes = Db::table('sean_order_main')->where('order_sn',$order_sn)->update(array('order_status' => '-1'));//订单主表
            }catch (\think\Exception\DbException $exception){
                Db::rollback();
            }
            if($order_dataRes && $main_dataRes){
                Db::commit();
                //订单日志
                $order_log_data = array(
                    'order_sn' => $order_one['order_sn'],
                    'user_id' => $order_one['user_id'],
                    'order_status' => '-1',
                    'pay_status' => $order_one['pay_status'],
                    'log_action' => '用户删除订单',
                    'log_time' => time(),
                );
                db('order_log')->insert($order_log_data);
                return json(array('status' => 1, 'msg' => '删除订单成功！'));
            }else{
                Db::rollback();
                return json(array('status' => 0, 'msg' => '删除订单失败！'));
            }

        }
    }

    /**
     * 查看物流
     */
    public function order_freight ()
    {
        if (!Request()->isAjax()) {
            return json(array('status' => 0, 'msg' => '请求类型错误！'));
        } else {
            $data = $this->request->param();
            $order_sn = $data['order_sn'];
            $order_one = db('order')->where(array('order_sn' => $order_sn))->field('order_sn,user_id,order_status,pay_status')->find();
            if (empty($order_one)) {
                return json(array('status' => 0, 'msg' => '该订单不存在！'));
            }
            dump($data);die;
        }
    }


    /**
     * 申请退款订单列表
     */
    public function refund ()
    {
        $data = $this->request->param();
        $order_sn = $data['order_sn'];
        $order_one = db('order')->where(array('order_sn' => $order_sn))->field('order_sn,user_id,order_status')->find();
        if (empty($order_one)) {
            $this->error('该订单不存在');
        }
        $order_goods = db('order_goods')->where(array('order_sn' => $order_sn, 'user_id' => session('user_id')))->select();
        if (empty($order_goods)) {
            $this->error('订单商品不存在');
        } else {
            $this->assign([
                'order_goods' => $order_goods,
            ]);
            return $this->fetch('User_order/refund');
        }

    }

    /**
     * 申请退款
     */
    public function order_refund ()
    {
        if (!Request()->isAjax()) {
            return json(array('status' => 0, 'msg' => '请求类型错误！'));
        } else {
            $post = $this->request->param();
            $data = $post['data'];//懒得数据过滤了

            $order_goods_one = db('order_goods')->where(array('order_goods_id' => $data['order_goods_id'], 'user_id' => session('user_id')))->find();
            if (empty($order_goods_one)) {
                return json(array('status' => 0, 'msg' => '订单商品不存在！'));
            }

            $order_one = db('order')->where(array('order_sn' => $data['order_sn'], 'user_id' => session('user_id')))->field('order_sn,user_id,order_status,pay_status,order_id')->find();
            if (empty($order_one)) {
                return json(array('status' => 0, 'msg' => '该订单不存在！'));
            }
            if (!in_array($order_one['order_status'], array(1, 2, 3, 4))) {
                return json(array('status' => 0, 'msg' => '违法操作订单！'));
            } else if ($order_goods_one['refund_type'] == 1) {
                return json(array('status' => 0, 'msg' => '您的产品已申请退款！'));
            } else if ($order_goods_one['refund_type'] == 2) {
                return json(array('status' => 0, 'msg' => '您的产品已申请退货退款！'));
            }

            //订单退货表数据
            $dataReturn = array(
                'order_id' => $order_one['order_id'],
				'user_id' => $order_one['user_id'],
				'return_type' => $data['refund_type'], //$refund_type订单商品表  return_type订单退货表
				'return_sn' => date("Ymdhis").substr(str_shuffle('1234567890'), 0, 6),//退款编号
				'return_desc' => $data['return_desc'], //退款描述
				'return_status' => 0,
				'return_time' => time(),
				'return_cause' => $data['return_cause'], //退款原因
				'order_goods_id' => $data['order_goods_id'],
				'return_money' => $order_goods_one['total_price'],
            );

            //插入退款表，更新订单商品order_goods，插入日志表    未确认呢是否更新订单状态两张表order_status，

            //开启事务
            Db::startTrans();
            try{
                //订单退货表
                $order_returnRes =  Db::table('sean_order_return')->insert($dataReturn);
                //订单商品表数据退货
                $order_goodsRes = Db::table('sean_order_goods')->where(array('order_goods_id'=>$data['order_goods_id'], 'order_sn'=>$order_one['order_sn']))->update(array('refund_type'=>$data['refund_type'], 'return_status'=>1, 'refund_money'=>$order_goods_one['total_price']));
            }catch (\think\Exception\DbException $exception){
                Db::rollback();
            }
            if($order_returnRes && $order_goodsRes){
                Db::commit();
                //订单日志
                $order_log_data = array(
                    'order_sn' => $order_one['order_sn'],
                    'user_id' => $order_one['user_id'],
                    'order_status' => 10,
                    'pay_status' => $order_one['pay_status'],
                    'log_action' => '用户申请退款',
                    'log_time' => time(),
                );
                db('order_log')->insert($order_log_data);
                return json(array('status' => 1, 'msg' => '申请退款成功！'));
            }else{
                Db::rollback();
                return json(array('status' => 0, 'msg' => '申请退款失败！'));
            }

        }
    }


    /**
	 * 退款详情页
	 */
	public function refund_detail ()
	{

        $data = $this->request->param();
        $order_one = db('order')->where(array('order_sn' => $data['order_sn']))->field('order_sn,user_id,order_status,pay_status')->find();
        if (empty($order_one)) {
            $this->error('该订单不存在');
        }
        $order_goods = db('order_goods')->where(array('order_sn' => $data['order_sn'], 'order_goods_id' => $data['order_goods_id'], 'user_id' => session('user_id')))->find();
        if ($order_goods['return_status'] == 0) {
            $this->error('该订单商品尚未申请退款');
        }
        $order_return = db('order_return')->where(array('order_goods_id' => $data['order_goods_id'], 'user_id' => session('user_id')))->find();

        if (empty($order_goods)) {
            $this->error('订单商品不存在');
        } else {
            $this->assign([
                'order_return' => $order_return,
                'order_goods' => $order_goods,
            ]);
            return $this->fetch('User_order/refund_detail');
        }
    }



    /**
	 * 确认收货
	 */
	public function takeOrder ()
	{
        if (!Request()->isAjax()) {
            return json(array('status' => 0, 'msg' => '请求类型错误！'));
        } else {
            $data = $this->request->param();
            $order_sn = $data['order_sn'];
            $order_one = db('order')->where(array('order_sn' => $order_sn))->field('order_sn,user_id,order_status,pay_status')->find();
            if (empty($order_one)) {
                return json(array('status' => 0, 'msg' => '该订单不存在！'));
            }
            //订单状态
            if ($order_one['order_status'] != 2) {
                return json(array('msg' => '订单状态错误', 'status' => 0));
            }
            //开启事务
            Db::startTrans();
            try{
                //更新订单状态
                $order_dataRes = Db::table('sean_order')->where(array('order_sn'=>$order_sn ,'user_id'=>session('user_id')))->update(array('order_status' => 3, 'cancel_time' => time()));//订单表
                $main_dataRes = Db::table('sean_order_main')->where(array('order_sn'=>$order_sn ,'user_id'=>session('user_id')))->update(array('order_status' => 3));//订单主表
            }catch (\think\Exception\DbException $exception){
                Db::rollback();
            }
            if($order_dataRes && $main_dataRes){
                Db::commit();
                //订单日志
                $order_log_data = array(
                    'order_sn' => $order_one['order_sn'],
                    'user_id' => $order_one['user_id'],
                    'order_status' => 3,
                    'pay_status' => $order_one['pay_status'],
                    'log_action' => '用户确认收货',
                    'log_time' => time(),
                );
                db('order_log')->insert($order_log_data);
                return json(array('status' => 1, 'msg' => '确认收货成功！'));
            }else{
                Db::rollback();
                return json(array('status' => 0, 'msg' => '确认收货失败！'));
            }

        }
    }


    /**
	 * 评价列表
	 */
	public function comment ()
	{
        $data = $this->request->param();
        $order_sn = $data['order_sn'];
        $order_one = db('order')->where(array('order_sn' => $order_sn, 'order_status' => 3))->field('order_sn,user_id,order_status,pay_status')->find();
        if (empty($order_one)) {
            $this->error('该订单不存在');
        }
        $order_goods = db('order_goods')->where(array('order_sn' => $order_sn, 'user_id' => session('user_id')))->select();
        if (empty($order_goods)) {
            $this->error('订单商品不存在');
        } else {
            $this->assign([
                'order_goods' => $order_goods,
            ]);
            return $this->fetch('User_order/comment_list');
        }

    }


    /**
	 * 提交评价
	 */
	public function comment_order ()
	{
        if (!Request()->isAjax()) {
            return json(array('status' => 0, 'msg' => '请求类型错误！'));
        } else {
            $post = $this->request->param();
            $data['goods_comment'] = $post['data']['goods_comment'];
            $data['order_sn'] = $post['data']['order_sn'];
            $data['goods_id'] = $post['data']['goods_id'];
            $data['comment_grade'] = $post['data']['comment_grade'];
            //商品评价星级为空时
            if ($data['comment_grade'] == '') {
                $data['comment_grade'] = '0';
            }
            $order_goods_id = $post['data']['order_goods_id'];

            //确认订单是否存在
            $order_one = db('order')->where(array('order_sn' => $data['order_sn'] ,'order_status' => 3))->field('order_sn,user_id,order_status,pay_status')->find();
            if (empty($order_one)) {
                return json(array('status' => 0, 'msg' => '该订单不存在！'));
            }
            //确认订单商品是否已评价
            $goods_one = db('order_goods')->where(array('order_goods_id'=>$order_goods_id, 'is_comment' => 1))->find();
            if ($goods_one) {
                return json(array('status' => 0, 'msg' => '该订单商品已评价！'));
            }

            $data['user_id'] = $order_one['user_id'];
            $data['comment_create_time'] = time();

            //开启事务
            Db::startTrans();
            try{
                //更新订单状态
                $goods_comment = Db::table('sean_goods_comment')->insert($data);
                //更新订单商品评论状态
                $order_goods = Db::table('sean_order_goods')->where(array('order_goods_id'=>$order_goods_id))->update(array('is_comment' => 1, 'comment_time' => time()));
                //更新订单评价状态
                $order = Db::table('sean_order')->where(array('order_sn' => $order_one['order_sn'], 'user_id' => $order_one['user_id'], 'order_status' => 3))->update(array('order_status' => 4, 'is_comment' => 1, 'comment_time' => time()));
            }catch (\think\Exception\DbException $exception){
                Db::rollback();
            }
            if($goods_comment && $order_goods && $order){
                Db::commit();
                //订单日志
                $order_log_data = array(
                    'order_sn' => $order_one['order_sn'],
                    'user_id' => $order_one['user_id'],
                    'order_status' => 4,
                    'pay_status' => $order_one['pay_status'],
                    'log_action' => '用户商品评价',
                    'log_time' => time(),
                );
                db('order_log')->insert($order_log_data);
                return json(array('status' => 1, 'msg' => '商品评价成功！'));
            }else{
                Db::rollback();
                return json(array('status' => 0, 'msg' => '商品评价失败！'));
            }

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
