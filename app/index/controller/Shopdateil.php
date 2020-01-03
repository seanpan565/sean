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
class Shopdateil extends Common
{
    /**
     * 显示商品详情页
     *
     */
    public function index()
    {
        $id = input('id');
        if (empty($id)) {
            $this->error('请求商品id不存在','index/index');
        }
        $user_id = session('user_id');
        //商品详情
        $goods = Db::name('goods')->where('id',$id)->find();
        //商品详情附表
        $goods_contentRes = Db::name('goods_content')->where('goods_id',$id)->select();
        $goods_content = $goods_contentRes['0'];
        //商品图集
        $goods_atlas = Db::name('goods_atlas')->where('goods_id',$id)->select();
        //商品属性
        $goods_attr = Db::name('goods_attr')->where('goods_id',$id)->select();
        //商品收藏
        $where = array('goods_id' => $id ,'user_id' => session('user_id'));
        $collect = db('goods_collect')->where($where)->find();
        //商品评价
        $goods_comment = Db::name('goods_comment')
            ->alias('a')
            ->join('user b','a.user_id = b.id','LEFT') //用户表
            ->field('a.*, b.id, b.user_name, b.thumb')
            ->where(array('goods_id'=>$id , 'comment_status'=>1))
            ->select();
        //评论数量
        $goods_comment_count = Db::name('goods_comment')->where(array('goods_id'=>$id , 'comment_status'=>1))->count();

        //商品分类
        $Catedata =Db('goods_cate')->select();
        $Cate = new \app\index\model\GoodsCate();
        $goodsCate =$Cate->Cate($Catedata);
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
            'goods' => $goods,
            'goods_content' => $goods_content,
            'goods_atlas' => $goods_atlas,
            'goods_attr' => $goods_attr,
            'collect' => $collect,
            'user_id' => $user_id,
            'goods_comment' => $goods_comment,
            'goods_comment_count' => $goods_comment_count,
        ]);
        return $this-> fetch('shopdateil/shopdateil');
    }

    /**
     * 收藏商品
     */
    public function collect($id)
    {
        //如果没有登录跳转登录页面
        if (empty(session('user_id'))) {
            $this->redirect('register/login');
        }
        //判断请求商品id
        if (empty($id) && !request()->isAjax()) {
            return json(array('status' => 0, 'msg' => '请求类型错误'));
        }
        $user_id = session('user_id');
        $where = array('goods_id' => $id, 'user_id' => $user_id);
        $is_collect = Db('goods_collect')->where($where)->find();

        //如果已经收藏就取消收藏
        if($is_collect){
            $res = Db('goods_collect')->where($where)->delete();
            if ($res) {
                return json(array('status' => 1, 'msg' => '取消收藏商品成功'));
            } else {
                return json(array('status' => 0, 'msg' => '取消收藏商品失败'));
            }
        }else{
            $data['user_id'] = $user_id;
            $data['goods_id'] = $id;
            $data['collect_create'] = time();
            $res = Db('goods_collect')->insert($data);
            if ($res) {
                return json(array('status' => 1, 'msg' => '收藏商品成功'));
            } else {
                return json(array('status' => 0, 'msg' => '收藏商品失败'));
            }
        }
    }

    /**
     * 检查库存
     */
    public function checkStock ()
    {
        $goods_id = input('goods_id', 0, 'intval');
        //判断商品是否下架
        $goods_one = db('goods_content')->where(array('goods_id' => $goods_id, 'goods_putaway' => 1))->field('goods_id,goods_putaway,goods_inventory')->find();
        if (empty($goods_one)) {
            return json(array('status' => 0, 'msg' => '该商品已经下架'));
        }else{
            return json(array('status' => 1, 'msg' => '商品'));
        }
    }






}
