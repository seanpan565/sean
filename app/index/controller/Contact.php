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
class Contact extends Common
{
    public function index()
    {
        return $this-> fetch('contact/contact');
    }

    public function message($data)
    {
        if (!Request()->isAjax()) {
            return json(array('status' => 0, 'info' => '提交类型错误'));
        } else {
            //表单数据验证
            $validate = validate('Contact');
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }
            $data['message'] = addslashes(sprintf("%s",$data['message']));
            $data['ip'] = get_client_ip();
            $data['create_time'] = time();
            $res = db('messages')->insert($data);
            if ($res) {
                return json(array('status' => '1' ,'msg' => '添加留言成功！'));
            } else {
                return json(array('status' => '0' ,'msg' => '添加留言失败！'));
            }

        }

    }


}
