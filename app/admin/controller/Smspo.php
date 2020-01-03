<?php
// +----------------------------------------------------------------------
// | Author [ 小钻风 ]
// +----------------------------------------------------------------------
// | Time:2019-11-22
// +----------------------------------------------------------------------
// | Blog ( http://www.seanpan.top )
// +----------------------------------------------------------------------
// | Email: < seanpan565@gmail.com >
// +----------------------------------------------------------------------

namespace app\admin\controller;
use \think\Controller;
use think\Loader;
use think\Db;
class Smspo extends Permissions
{
    //短信宝
    public function index()
    {
        $smspo = Db('smspo')->where('id','1')->find();
        $this->assign('smspo',$smspo);
        return $this->fetch();
    }

    public function save()
    {
        if($this->request->isPost()) {
            $data = $this->request->post();
            $post['username'] = $data['username'];
            $post['password'] = $data['password'];
            //验证  唯一规则： 表名，字段名，排除主键值，主键名
            $validate = new \think\Validate([
                ['username', 'require', '短信宝账号不能为空'],
                ['password', 'require', '短信宝密码不能为空'],
            ]);
            //验证部分数据合法性
            if (!$validate->check($post)) {
                $this->error('提交失败：' . $validate->getError());
            }
            if (Db::name('smspo')->where('id','1')->find()) {
                if(false == Db::name('smspo')->where('id','1')->update($post)) {
                    return $this->error('更新失败');
                } else {
                    addlog();//写入日志
                    return $this->success('提交成功','admin/smspo/index');
                }
            } else {
                if(false == Db::name('smspo')->insert($post)) {
                    return $this->error('添加失败');
                } else {
                    addlog();//写入日志
                    return $this->success('添加成功','admin/smspo/index');
                }
            }

        } else {
    		return $this->error('非法请求');
    	}
    }

    //短信宝发送测试
    public function note()
    {
        $mobile_data = db('smspo')->where('id','1')->find();
        $code = rand(100000, 999999);
        $mobile = input('phone');
        $username = $mobile_data['username'];
        $password = $mobile_data['password'];
        $res = $this->mobile_code($mobile, $code ,$username ,$password);
        if ($res == '短信发送成功') {
            return json(array('status' => 1, 'msg' => '短信宝测试发送成功,请注意用手机查收'));
        } else {
            return json(array('status' => 0, 'msg' => '短信宝测试发送失败'));
        }
    }

    /**
     * 发送短信
     */
	public function mobile_code($mobile,$code,$username ,$password){
		$statusStr = array(
		"0" => "短信发送成功",
		"-1" => "参数不全",
		"-2" => "服务器空间不支持,请确认支持curl或者fsocket，联系您的空间商解决或者更换空间！",
		"30" => "密码错误",
		"40" => "账号不存在",
		"41" => "余额不足",
		"42" => "帐户已过期",
		"43" => "IP地址限制",
		"50" => "内容含有敏感词"
		);
		$smsapi = "http://api.smsbao.com/";
		$user = $username; //短信宝平台你的帐号
		$pass = md5($password); //短信宝平台你的登录密码
		$content="欢迎注册水果鲜生，您的验证码为.$code.在10分钟内有效。";//要发送的短信内容
		$phone = $mobile;//要发送短信的手机号码
		$sendurl = $smsapi."sms?u=".$user."&p=".$pass."&m=".$phone."&c=".urlencode($content);
		$result =file_get_contents($sendurl) ;
		return $statusStr[$result];
	}


}
