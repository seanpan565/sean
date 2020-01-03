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
class Hupi extends Permissions
{
    /**
     * 显示虎皮椒支付页面
     *
    */
    public function index()
    {
        $hupi = Db('hupi')->where('id','1')->find();
        $this->assign('hupi',$hupi);
        return $this->fetch();
    }

    /**
     * 修改虎皮椒支付资料
     *
    */
    public function save()
    {
        if($this->request->isPost()) {
            $data = $this->request->post();
            $post['appid'] = $data['appid'];
            $post['appsecret'] = $data['appsecret'];
            $post['title'] = $data['title'];
            $post['my_plugin_id'] = $data['my_plugin_id'];
            //验证  唯一规则： 表名，字段名，排除主键值，主键名
            $validate = new \think\Validate([
                ['appid', 'require', '虎皮椒账号不能为空'],
                ['appsecret', 'require', '虎皮椒密匙不能为空'],
                ['title', 'require', '虎皮椒标题不能为空'],
                ['my_plugin_id', 'require', '虎皮椒自定义ID不能为空'],
            ]);
            //验证部分数据合法性
            if (!$validate->check($post)) {
                $this->error('提交失败：' . $validate->getError());
            }
            if (Db::name('hupi')->where('id','1')->find()) {
                if(false == Db::name('hupi')->where('id','1')->update($post)) {
                    return $this->error('更新失败');
                } else {
                    addlog();//写入日志
                    return $this->success('提交成功','admin/hupi/index');
                }
            } else {
                if(false == Db::name('hupi')->insert($post)) {
                    return $this->error('添加失败');
                } else {
                    addlog();//写入日志
                    return $this->success('添加成功','admin/hupi/index');
                }
            }

        } else {
            return $this->error('非法请求');
        }
    }


}
