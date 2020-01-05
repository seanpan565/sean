<?php
// +----------------------------------------------------------------------
// | Author [ 小钻风 ]
// +----------------------------------------------------------------------
// | Time:2019-12-19
// +----------------------------------------------------------------------
// | Blog ( http://www.seanpan.top )
// +----------------------------------------------------------------------
// | Email: < seanpan565@gmail.com >
// +----------------------------------------------------------------------

namespace app\admin\controller;
use \think\Db;
class Order extends Permissions
{
    //订单列表页
    public function index()
    {
        $order = Db('order_main')
            ->alias('a')
            ->join('user b','a.user_id = b.id','LEFT')
            ->where('order_status','<>','-1')
            ->field('a.* , b.user_name')
            ->paginate(15);
        $this->assign('order',$order);
        return $this->fetch();
    }

    //订单发货页
    public function addres()
    {
        $order_sn = $this->request->param();
        $order_sn = implode($order_sn);
        $addres = db('order')->where('order_sn',$order_sn)->field('order_sn,address_name,address_phone,address_site,order_msg')->find();
        if (empty($addres)) {
            return $this->error('该订单不存在');
        }
        $delivery_data = db('delivery')->where('delivery_status' , 1)->field('delivery_id,delivery_name')->select();
        $this->assign('delivery_data', $delivery_data);
        $this->assign('addres',$addres);
        return $this->fetch();
    }

    /**
     * 订单发货
     */
    public function delivery ()
    {
        if (!Request()->isAjax()) {
            return json(array('status' => 0, 'msg' => '请求类型错误！'));
        } else {
            $addres = $this->request->param();
            $addres = $addres['data'];
            $order = db('order')->where(array('order_sn' => $addres['order_sn'], 'order_status' => 1))->field('order_sn,user_id,order_status')->find();
            if (empty($order)) {
                return json(array('status' => 0, 'msg' => '该订单不存在！'));
            }
            //获取订单的商品

            $order_goods = db('order_goods')
                ->where('order_sn',$order['order_sn'])
                ->where('user_id',$order['user_id'])
                ->where('return_status','eq',1)
                ->where('return_status','eq',2)
                ->select();

            //判断商品是否有退款或者退货退款的订单
            if ($order_goods) {
                return json(array('status' => 0, 'msg' => '该订单有退款或者退货退款！'));
            }

            //配送方式名称
            $shipping = db('delivery')->where('delivery_id' , $addres['shipping_id'])->field('delivery_id,delivery_name')->find();
            $data = array(
                'shipping_sn' => $addres['shipping_sn'], //快递单号
                'shipping_id' => $addres['shipping_id'], //快递id
                'shipping_status' => 1, //快递状态
                'shipping_name' => $shipping['delivery_name'], //配送方式名称
                'send_time' => time(), //发货时间
            );
            $res = db('order_goods')->where(array('order_sn' => $order['order_sn'], 'user_id' => session('user_id') ,))->update($data);
            if ($res) {
                //更新订单状态->发货
                db('order')->where('order_sn' ,$order['order_sn'])->update(array('order_status' => 2, 'send_time' => time()));
                db('order_main')->where('order_sn' ,$order['order_sn'])->update(array('order_status' => 2));
				//订单日志
				$order_log_data = array(
					'order_sn' => $order['order_sn'],
					'user_id' => $order['user_id'],
					'order_status' => 2,
					'pay_status' => 1,
					'log_action' => '卖家发货成功',
					'log_time' => time(),
				);
                db('order_log')->insert($order_log_data);
                return json(array('status' => 1, 'msg' => '发货成功！'));
            } else {
                return json(array('status' => 0, 'msg' => '发货失败！'));
            }

        }
    }

    /**
     * 订单详情
     */
    public function datails ()
    {
        return $this->fetch('order/order_datails');
    }

    /**
     * 查看物流
     */
    public function freight ()
    {
        if (!Request()->isAjax()) {
            return json(array('status' => 0, 'msg' => '请求类型错误！'));
        } else {
            $data = $this->request->param();
            $order = db('order')->where(array('order_sn' => $data['order_sn']))->field('order_sn,user_id,order_status')->find();
            if (empty($order)) {
                return json(array('status' => 0, 'msg' => '该订单不存在！'));
            }
            dump($data);die;
        }
    }

    /**
     * 管理员删除订单
     */
    public function order_del ()
    {
        if (!Request()->isAjax()) {
            return json(array('status' => 0, 'msg' => '请求类型错误！'));
        } else {
            $data = $this->request->param();
            $order = db('order')->where(array('order_sn' => $data['order_sn']))->field('order_sn,user_id,order_status,pay_status')->find();
            if (empty($order)) {
                return json(array('status' => 0, 'msg' => '该订单不存在！'));
            }
            //开启事务
            Db::startTrans();
            try{
                $order_dataRes = Db::table('sean_order')->where('order_sn',$order['order_sn'])->update(array('order_status' => '-1'));//订单表
                $main_dataRes = Db::table('sean_order_main')->where('order_sn',$order['order_sn'])->update(array('order_status' => '-1'));//订单主表
            }catch (\think\Exception\DbException $exception){
                Db::rollback();
            }
            if($order_dataRes && $main_dataRes){
                Db::commit();
                //订单日志
                $order_log_data = array(
                    'order_sn' => $order['order_sn'],
                    'user_id' => $order['user_id'],
                    'order_status' => -1,
                    'pay_status' => $order['pay_status'],
                    'log_action' => '管理员删除订单',
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
    * 商品评价列表
    */
    public function commentlist ()
    {
        $commentlist = Db::name('goods_comment')
            ->alias('a')
            ->join('goods b','a.goods_id = b.id','LEFT') //商品详情副表
            ->join('user c','a.user_id = c.id','LEFT') //商品详情副表
            ->field('a.*, b.goods_name, b.goods_thumb, c.user_name')
            ->paginate(15);
        $this->assign([
            'commentlist' => $commentlist,
        ]);
        return $this->fetch();
    }

    /**
    * 商品评价回复
    */
    public function comment_reply()
    {
        if($this->request->isAjax()){
            $data = $this->request->param();
            $comment = db('goods_comment')->where('id',$data['reply_id'])->find();
            if (empty($comment)) {
                return json(array('status' => 0, 'msg' => '该商品评价不存在'));
            }
            $res = db('goods_comment')->where('id',$data['reply_id'])->update(array('reply_content'=>$data['reply_content']));
            if ($res) {
                return json(array('status' => 1, 'msg' => '回复商品评价成功'));
            }else {
                return json(array('status' => 0, 'msg' => '回复商品评价失败'));
            }
        }else{
            return json(array('status' => 0, 'msg' => '请求类型错误！'));
        }
    }


    /**
    * 商品评价状态
    */
    public function comment_status()
    {
        if($this->request->isPost()){
            $post = $this->request->post();
            if(false == Db::name('goods_comment')->where('id',$post['id'])->update(['comment_status'=>$post['comment_status']])) {
                return $this->error('设置失败');
            } else {
                return $this->success('设置成功','admin/order/commentlist');
            }
        }
    }

    /**
    * 商品评价删除
    */
    public function comment_del()
    {
        if($this->request->isAjax()) {
            $id = $this->request->has('id') ? $this->request->param('id', 0, 'intval') : 0;
            if(false == Db::name('goods_comment')->where('id',$id)->delete()) {
                return $this->error('删除商品评价失败');
            } else {
                return $this->success('删除商品评价成功','admin/order/commentlist');
            }
        }
    }



    /**
     * 申请退款列表
     */
    public function refundlist ()
    {
        $refundlist = db('order_return')
        ->alias('a')
        ->join('order_goods b','a.order_goods_id = b.order_goods_id','LEFT') //订单商品表
        ->join('user c','a.user_id = c.id','LEFT') //用户信息表
        ->field('a.*, b.goods_name, b.goods_thumb, c.user_name')
        ->paginate(15);
        $this->assign([
            'refundlist' => $refundlist,
        ]);
        return $this->fetch();
    }

    /**
     * 取消申请退款
     */
    public function refund_cancel ()
    {
        if($this->request->isPost()){
            $id = $this->request->param('id', 0, 'intval');
            $returnOne = db('order_return')->where('return_id',$id)->find();
            if (empty($returnOne)) {
                return json(array('status' => 0, 'msg' => '该申请不存在'));
            }
            if ($returnOne['return_status'] == '-1') {
                return json(array('status' => 0, 'msg' => '该申请已取消'));
            }
            //开启事务
            Db::startTrans();
            try{
                //取消申请退款
                $order_returnRes = Db::table('sean_order_return')->where(array('return_id'=>$id))->update(array('return_status' => '-1', 'return_cancel_time' => time()));
                //更新订单商品申请状态
                $order_goods = Db::table('sean_order_goods')->where(array('order_goods_id'=>$returnOne['order_goods_id']))->update(array('return_status' => '-1'));
            }catch (\think\Exception\DbException $exception){
                Db::rollback();
            }
            if($order_returnRes && $order_goods){
                Db::commit();
                return json(array('status' => 1, 'msg' => '取消申请成功！'));
            }else{
                Db::rollback();
                return json(array('status' => 0, 'msg' => '取消申请失败！'));
            }

        }else{
            return json(array('status' => 0, 'msg' => '请求类型错误！'));
        }
    }

    /**
    * 删除申请退款
    */
    public function refund_del()
    {
        if($this->request->isAjax()) {
            $id = $this->request->has('id') ? $this->request->param('id', 0, 'intval') : 0;
            $returnOne = db('order_return')->where('return_id',$id)->find();
            if (empty($returnOne)) {
                return json(array('status' => 0, 'msg' => '该申请不存在'));
            }

            //开启事务
            Db::startTrans();
            try{
                //取消申请退款
                $order_returnRes = Db::table('sean_order_return')->where(array('return_id'=>$id))->delete();
                //更新订单商品申请状态
                $order_goods = Db::table('sean_order_goods')->where(array('order_goods_id'=>$returnOne['order_goods_id']))->update(array('return_status' => '3'));
            }catch (\think\Exception\DbException $exception){
                Db::rollback();
            }
            if($order_returnRes && $order_goods){
                Db::commit();
                return json(array('status' => 1, 'msg' => '删除申请成功！'));
            }else{
                Db::rollback();
                return json(array('status' => 0, 'msg' => '删除申请失败！'));
            }
        }else{
            return json(array('status' => 0, 'msg' => '请求类型错误！'));
        }
    }

    /**
    * 拒绝申请退款
    */
    public function refund_refuse(){
        if($this->request->isPost()){
            $data = $this->request->param();
            $return_seller_desc = $data['return_seller_desc'];//拒绝描述
            // $return_seller_desc = $data['return_seller_desc'];//拒绝原因
            $returnOne = db('order_return')->where('return_id',$data['reply_id'])->find();
            if (empty($returnOne)) {
                return json(array('status' => 0, 'msg' => '该申请不存在'));
            }
            if ($returnOne['return_status'] == '-1') {
                return json(array('status' => 0, 'msg' => '该申请已取消'));
            }
            //开启事务
            Db::startTrans();
            try{
                //拒绝退款
                $order_returnRes = Db::table('sean_order_return')->where(array('return_id'=>$data['reply_id']))->update(array('return_status' => '2','return_seller_desc'=>$data['return_seller_desc'], 'return_seller_time' => time()));
                //更新订单商品申请状态
                $order_goods = Db::table('sean_order_goods')->where(array('order_goods_id'=>$returnOne['order_goods_id']))->update(array('return_status' => '3'));
            }catch (\think\Exception\DbException $exception){
                Db::rollback();
            }
            if($order_returnRes && $order_goods){
                Db::commit();
                return json(array('status' => 1, 'msg' => '拒绝退款成功！'));
            }else{
                Db::rollback();
                return json(array('status' => 0, 'msg' => '拒绝退款失败！'));
            }

        }else{
            return json(array('status' => 0, 'msg' => '请求类型错误！'));
        }
    }


    /**
    * 同意申请退款
    */
    public function refund_consent()
    {
        if($this->request->isAjax()) {
            $id = $this->request->has('id') ? $this->request->param('id', 0, 'intval') : 0;
            $returnOne = db('order_return')->where('return_id',$id)->find();
            if (empty($returnOne)) {
                return json(array('status' => 0, 'msg' => '该申请不存在'));
            }
            //退款操作



            //开启事务
            Db::startTrans();
            try{
                // //取消申请退款
                // $order_returnRes = Db::table('sean_order_return')->where(array('return_id'=>$id))->delete();
                // //更新订单商品申请状态
                // $order_goods = Db::table('sean_order_goods')->where(array('order_goods_id'=>$returnOne['order_goods_id']))->update(array('return_status' => '3'));
            }catch (\think\Exception\DbException $exception){
                Db::rollback();
            }
            if($order_returnRes && $order_goods){
                Db::commit();
                return json(array('status' => 1, 'msg' => '同意申请成功！'));
            }else{
                Db::rollback();
                return json(array('status' => 0, 'msg' => '同意申请失败！'));
            }
        }else{
            return json(array('status' => 0, 'msg' => '请求类型错误！'));
        }
    }



















}
