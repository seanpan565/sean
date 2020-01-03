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


namespace app\admin\controller;
use \think\Cache;
use \think\Controller;
use think\Loader;
use think\Db;
use \think\Cookie;
use \think\Session;
use app\admin\controller\Permissions;
use app\admin\model\Goods as GoodsModel;
use app\admin\model\GoodsCate as GoodsCateModel;
class goods extends Permissions
{
    /**
     * 显示商品列表
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function index()
    {
        $goods = Db::name('goods')
        ->alias('a')
        ->join('goods_cate b','a.goods_cate_id = b.id','LEFT')     //商品所属分类
        ->join('goods_content c','a.id = c.goods_id','LEFT') //商品详情副表
        ->field('a.* , b.name, c.*')
        ->paginate(15);
        $this->assign([
            'goods' => $goods,
        ]);
        return $this->fetch();
    }


    /**
     * 新增商品
     *
     * @param  int  $data
     * @return \think\Response
     */
    public function create()
    {
        //获取菜单id
        $id = $this->request->has('id') ? $this->request->param('id', 0, 'intval') : 0;
        if (!Request()->isAjax()) {
            //非提交操作
            $pid = $this->request->has('pid') ? $this->request->param('pid', null, 'intval') : null;
            if(!empty($pid)) {
                $this->assign('pid',$pid);
            }
            $CateModel = new GoodsCateModel();
            $cate = $CateModel->select();
            $cates = $CateModel->catelist($cate);
            $this->assign('cates',$cates);
            return $this->fetch();
        } else {
            //是提交操作
            $data = $this->request->post();
            if (empty($data)) {
                return json(array('status' => 0, 'info' => '数据不存在！'));
            }
            $GoodsModel = new GoodsModel();
            $res = $GoodsModel->add($data);
            if ($res) {
                addlog($id);//写入日志
                return json(array('status' => 1, 'info' => '新增商品成功！'));
            } else {
                return json(array('status' => 0, 'info' => '新增商品失败！'));
            }
        }

    }

    /**
     * 编辑商品
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit()
    {
        //获取菜单id
        $id = $this->request->has('id') ? $this->request->param('id', 0, 'intval') : 0;
        if (!Request()->isAjax()) {
            //非提交操作
            $CateModel = new GoodsCateModel();
            $cates = $CateModel->select();
            $cates_all = $CateModel->catelist($cates);
            //商品详情
            $goods = Db::name('goods')->where('id',$id)->find();
            //商品详情附表
            $goods_contentRes = Db::name('goods_content')->where('goods_id',$id)->select();
            $goods_content = $goods_contentRes['0'];
            //商品图集
            $goods_atlas = Db::name('goods_atlas')->where('goods_id',$id)->select();
            //商品属性
            $goods_attr = Db::name('goods_attr')->where('goods_id',$id)->select();

            $this->assign([
                'goods' => $goods,
                'goods_content' => $goods_content,
                'goods_atlas' => $goods_atlas,
                'goods_attr' => $goods_attr,
                'cates' => $cates_all,
            ]);
            return $this->fetch();
        } else {
            //是提交操作
            $data = $this->request->post();
            if (empty($data)) {
                return json(array('status' => 0, 'info' => '数据不存在！'));
            }
            $GoodsModel = new GoodsModel();
            $res = $GoodsModel->updates($data);
            if ($res) {
                addlog($id);//写入日志
                return json(array('status' => 1, 'info' => '修改商品成功！'));
            } else {
                return json(array('status' => 0, 'info' => '修改商品失败！'));
            }
        }
    }

    /**
     * 删除商品
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete()
    {
        if($this->request->isAjax()) {
            $id = $this->request->has('id') ? $this->request->param('id', 0, 'intval') : 0;
            $GoodsModel = new GoodsModel();
            $res = $GoodsModel->del($id);
            if($res) {
                addlog($id);//写入日志
                return $this->success('删除成功','admin/goods/index');
            } else {
                return $this->error('删除失败');
            }
        }
    }


    /**
	 * ajax验证商品名
	 * $username是ajax发送过来的商品名
	 */
	public function ajaxName ($username)
	{
        $res = db('goods')->where('goods_name',$username)->field('goods_name')->find();
        if (!empty($res)) {
            $data = array(
                'status' => '1',
                'info' => '商品名称已经重复，请换一个试试'
            );
        } else {
            $data = array(
                'status' => '0',
                'info' => '验证通过'
            );
        }
        return json($data);
	}

    //多图上传商品图集接口
    public function upload()
    {
       if($this->request->isPost()){
            if($this->request->file('file')){
               $file = $this->request->file('file');
            }else{
               $res['code']=1;
               $res['msg']='没有上传文件';
               return json($res);
            }
             $res['code']=1;
             $res['msg'] = '上传成功！';
             $file = $this->request->file('file');
             $info = $file->move('./uploads/admin/goods_thumb/');
             if($info){
                 $res['name'] = $info->getFilename();
                 $res['filepath'] = '/'.str_replace('\\','/',$info->getSaveName());
             }else{
                 $res['code'] = 0;
                 $res['msg'] = '上传失败！'.$file->getError();
             }
             return $res;
        }
    }

    //多图删除商品图集
    public function delimg(){
        $imgurl=input('imgurl');
        $imgurl='./uploads/admin/goods_thumb'. $imgurl;
        $res=unlink($imgurl);
        if($res){
            echo 1; //删除文件成功
        }else{
            echo 2;//删除文件失败
        }
    }

    /**
     *  是否上架
     *
     */
    public function goods_putaway()
    {
        if($this->request->isPost()){
            $post = $this->request->post();
            if(false == Db::name('goods_content')->where('id',$post['id'])->update(['goods_putaway'=>$post['goods_putaway']])) {
                return $this->error('设置失败');
            } else {
                return $this->success('设置成功','admin/goods/index');
            }
        }

    }

    /**
     *  是否推荐
     *
     */
    public function goods_recommend()
    {
        if($this->request->isPost()){
            $post = $this->request->post();
            if(false == Db::name('goods_content')->where('id',$post['id'])->update(['goods_recommend'=>$post['goods_recommend']])) {
                return $this->error('设置失败');
            } else {
                return $this->success('设置成功','admin/goods/index');
            }
        }
    }

}
