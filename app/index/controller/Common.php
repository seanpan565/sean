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
namespace app\index\Controller;
use think\Controller;
use think\Request;
use think\Session;
use think\Cookie;
use think\Db;
use think\Cache;
class Common extends Controller
{
    public function _initialize()
    {
        //隐藏登录/注册
        $user = db('user')->where('id',session('user_id'))->field('id,user_name')->find();
        if (empty($user)) {
            $user['id'] = 0;
        }
        //获取当前控制器
        $controller = request()->controller();

        //购物车数量
        $cartCount = db('cart')->where('user_id',session('user_id'))->count();
        //购物车商品
        $cart_data = Db::name('cart')
            ->alias('a')
            ->join('goods b','a.goods_id = b.id','LEFT') //商品详情表
            ->field('a.id, a.user_id, a.goods_id, a.goods_count,b.goods_name, b.goods_price, b.goods_vip, b.goods_thumb')
            ->where('a.user_id',session('user_id'))
            ->select();
        //商品小计价
        foreach ($cart_data as $k => $v) {
            $cart_data[$k]['total_price'] = $v['goods_vip'] * $v['goods_count'];
        }
        //商品总价默认数
        $goods_total = 0;
        foreach ($cart_data as $k => $v) {
            $goods_total += $cart_data[$k]['total_price'];
        }
        $cart_head = array($cart_data, $goods_total);

        //网站tdk
        $web_tdk = db('webconfig')->field('name,keywords,desc')->find();
        $this->assign([
            'web_tdk' => $web_tdk,
            'cart_head' => $cart_head,
            'cartCount' => $cartCount,
            'controller' => $controller,
            'user' => $user,
        ]);

    }


    /**
     * 图片上传方法
     * @return [type] [description]
     */
    public function upload($module='index',$use='index_thumb')
    {
        if($this->request->file('file')){
            $file = $this->request->file('file');
        }else{
            $res['code']=1;
            $res['msg']='没有上传文件';
            return json($res);
        }
        $module = $this->request->has('module') ? $this->request->param('module') : $module;//模块
        $web_config = Db::name('webconfig')->where('web','web')->find();
        $info = $file->validate(['size'=>$web_config['file_size']*1024,'ext'=>$web_config['file_type']])->rule('date')->move(ROOT_PATH . 'public' . DS . 'uploads' . DS . $module . DS . $use);
        if($info) {
            //写入到附件表
            $data = [];
            $data['module'] = $module;
            $data['filename'] = $info->getFilename();//文件名
            $data['filepath'] = DS . 'uploads' . DS . $module . DS . $use . DS . $info->getSaveName();//文件路径
            $data['fileext'] = $info->getExtension();//文件后缀
            $data['filesize'] = $info->getSize();//文件大小
            $data['create_time'] = time();//时间
            $data['uploadip'] = $this->request->ip();//IP
            $data['user_id'] = Session::has('admin') ? Session::get('admin') : 0;
            if($data['module'] = 'admin') {
                //通过后台上传的文件直接审核通过
                $data['status'] = 1;
                $data['admin_id'] = $data['user_id'];
                $data['audit_time'] = time();
            }
            $data['use'] = $this->request->has('use') ? $this->request->param('use') : $use;//用处
            $res['id'] = Db::name('attachment')->insertGetId($data);
            $res['src'] = DS . 'uploads' . DS . $module . DS . $use . DS . $info->getSaveName();
            $res['code'] = 2;
            return json($res);
        } else {
            // 上传失败获取错误信息
            return $this->error('上传失败：'.$file->getError());
        }
    }


    /**
     * 商品搜索
     */
    public function search(){
        $post = $this->request->param();
        $validate = new \think\Validate([
            ['goods_name', 'require|length:2,15|chs', '搜索内容不能为空|请输入2-15个字的搜索内容|搜索内容只能是汉字'],
        ]);
        //验证部分数据合法性
        if (!$validate->check($post)) {
            $this->error('提交失败：' . $validate->getError());
        }
        $goods_name = $post['goods_name'];

        //商品列表
        $goodsList = Db::name('goods')
        ->alias('a')
        ->join('goods_content b','a.id = b.goods_id','LEFT') //商品详情副表
        ->field('a.id,a.goods_cate_id,a.goods_name,a.goods_price,a.goods_title,a.goods_keyword,a.goods_vip,a.goods_thumb,b.goods_sales , b.goods_id,b.goods_putaway,b.goods_recommend,b.goods_collect,b.goods_inventory')
        ->where('b.goods_putaway',1)
        //模糊查询
        ->whereLike('goods_name|goods_title|goods_keyword',"%".$goods_name."%")
        ->order(['a.id'=>'desc'])
        ->select();

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





}
