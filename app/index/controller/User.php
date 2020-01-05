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
use think\Request;
use app\index\controller\Common;
class User extends Common
{

    /**
     * 显示修改会员信息
     */
    public function index()
    {
        if (request()->isAjax()) {
            $data = $this->request->post();
            //验证
            $validate = new \think\Validate([
                ['user_name', 'alphaDash', '用户名格式只能为字母、数字和下划线_及破折号-'],
                ['user_sex', 'require', '请填写用户名性别'],
                ['user_sex', 'number', '用户名性别只能为数字'],
                ['thumb', 'require', '请上传缩略图'],
            ]);
            //验证部分数据合法性
            if (!$validate->check($data)) {
                $this->error('提交失败：' . $validate->getError());
            }
            $res = Db('user')->where('id',session('user_id'))->update($data);
            if ($res) {
                return json(array('status' => 1, 'msg' => '修改会员信息成功'));
            } else {
                return json(array('status' => 0, 'msg' => '修改会员信息失败'));
            }
        } else {
            //检查用户是否已经登录
            $this->checkLogin();
            $usermsg = Db('user')->where('id',session('user_id'))->field('id,user_name,user_sex,thumb')->find();
            $this->assign([
                'usermsg' => $usermsg,
            ]);
            return $this-> fetch();
        }

    }


    /**
     * 新增会员收货地址
     */
    public function address()
    {
        if (request()->isAjax()) {
            $data = $this->request->post();
            //验证  唯一规则： 表名，字段名，排除主键值，主键名
            $validate = new \think\Validate([
                ['address_name', 'require', '收货人姓名不能为空'],
                ['address_name', 'chsAlpha', '收货人姓名格式只能为汉字和字母'],
                ['address_name', 'max:15', '收货人姓名最大值为15位'],
                ['address_phone', 'require', '手机号码不能为空'],
                ['address_phone', 'number', '手机号码只能为数字'],
                ['address_phone', 'max:11', '手机号码最大值为11位'],
                ['address_phone', 'min:10', '手机号码最小值为10位'],
                ['is_default', 'number', '是否默认只能为数字'],
            ]);
            //验证部分数据合法性
            if (!$validate->check($data)) {
                $this->error('提交失败：' . $validate->getError());
            }

            $res = Db('address')->insert($data);
            if ($res) {
                return json(array('status' => 1, 'msg' => '新增收货地址成功'));
            } else {
                return json(array('status' => 0, 'msg' => '新增收货地址失败'));
            }
        } else {
            //检查用户是否已经登录
            $this->checkLogin();
            $this->assign([
                'useraddress' => session('user_id'),
            ]);
            return $this-> fetch();
        }
    }

    /**
     * 修改会员收货地址
     */
    public function edit_address()
    {
        if (request()->isAjax()) {
            $data = $this->request->post();
            //验证  唯一规则： 表名，字段名，排除主键值，主键名
            $validate = new \think\Validate([
                ['address_name', 'require', '收货人姓名不能为空'],
                ['address_name', 'chsAlpha', '收货人姓名格式只能为汉字和字母'],
                ['address_name', 'max:15', '收货人姓名最大值为15位'],
                ['address_phone', 'require', '手机号码不能为空'],
                ['address_phone', 'number', '手机号码只能为数字'],
                ['address_phone', 'max:11', '手机号码最大值为11位'],
                ['address_phone', 'min:10', '手机号码最小值为10位'],
                ['is_default', 'number', '是否默认只能为数字'],
            ]);
            //验证部分数据合法性
            if (!$validate->check($data)) {
                $this->error('提交失败：' . $validate->getError());
            }
            //先把默认地址取消
            $no_default = Db('address')->where('user_id',session('user_id'))->update(['is_default' => '0']);
            $res = Db('address')->where('id',$data['id'])->update($data);
            if ($res) {
                return json(array('status' => 1, 'msg' => '修改收货地址成功'));
            } else {
                return json(array('status' => 0, 'msg' => '修改收货地址失败'));
            }
        } else {
            //检查用户是否已经登录
            $this->checkLogin();
            $id = input('id');
            if (empty($id)) {
                $this->error('请求id不存在');
            }
            $edit_default = Db('address')->where('id',$id)->find();
            $this->assign('edit_default',$edit_default);
            return $this-> fetch('user/edit_address');
        }
    }

    /**
     * 会员收货地址列表及删除
     */
    public function addresslist()
    {
        if (request()->isAjax()) {
            $id = input('id');
            $type = input('type');
            switch ($type) {
                case "del":
                    $default = Db('address')->where('id',$id)->find();
                    if ($default) {
                        return json(array('status' => 0, 'msg' => '默认收货地址不能删除'));
                    }
                    $res = Db('address')->where('id',$id)->delete();
                    if ($res) {
                        return json(array('status' => 1, 'msg' => '删除收货地址成功'));
                    } else {
                        return json(array('status' => 0, 'msg' => '删除收货地址失败'));
                    }
                break;
                case "default":
                    //先把默认地址取消，然后再把传过来的id设为默认，两个都是更改操作
                    $no_default = Db('address')->where('user_id',session('user_id'))->update(['is_default' => '0']);
                    $res = Db('address')->where('id',$id)->update(['is_default' => '1']);
                    if ($res) {
                        return json(array('status' => 1, 'msg' => '修改默认收货地址成功'));
                    } else {
                        return json(array('status' => 0, 'msg' => '修改默认收货地址失败'));
                    }
                break;
                default:
                    return json(array('status' => 0, 'msg' => '请求类型错误'));
            }

        } else {
            //检查用户是否已经登录
            $this->checkLogin();
            $addresslist = Db('address')->where('user_id',session('user_id'))->select();
            $this->assign([
                'addresslist' => $addresslist,
            ]);
            return $this-> fetch();
        }
    }

    /**
     * 会员收藏商品
     *
     */
    public function collect()
    {
        if (request()->isAjax()) {
            $id = input('id');
            $user_id = session('user_id');
            $where = array('goods_id' => $id ,'user_id' => $user_id);
            $res = Db('goods_collect')->where($where)->delete();
            if ($res) {
                return json(array('status' => 1, 'msg' => '取消收藏改商品成功'));
            } else {
                return json(array('status' => 0, 'msg' => '取消收藏改商品失败'));
            }
        } else {
            //检查用户是否已经登录
            $this->checkLogin();
            $user_id = session('user_id');
            $collectlist = Db('goods_collect')
                ->alias('a')
                ->join('goods c','a.goods_id = c.id','LEFT') //商品详情表
                ->field('a.* , c.id, c.goods_name ,c.goods_price ,c.goods_vip ,c.goods_thumb')
                ->where('a.user_id',session('user_id'))
                ->paginate(10);
            $this->assign([
                'collectlist' => $collectlist,
            ]);
            return $this-> fetch();
        }
    }


    /**
     * 用户订单管理
     */
    public function order()
    {
        return $this->fetch();
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
