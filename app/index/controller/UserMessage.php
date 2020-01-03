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
use think\captcha\Captcha;
use app\index\controller\Common;
class UserMessage extends Common
{
    /**
     * 用户信息列表
     */
    public function index()
    {
        //检查用户是否已经登录
        $this->checkLogin();
        $where = array('id' => session('user_id'), 'user_status' => 1);
        $user = Db('user')->where($where)->field('id,user_name,user_mobile,user_email,user_payword,user_status')->find();

        //替换中间四位数字
        if (!empty($user['user_email'])) {
            $user['user_email'] = hide_phone($user['user_email']);
        }
        if (!empty($user['user_mobile'])) {
            $user['user_mobile'] = hide_phone($user['user_mobile']);
        }

        $this->assign([
            'user' => $user,
        ]);
        return $this-> fetch();

    }


    /**
	 * 修改密码
	 */
	public function password ()
	{
		if ($this->request->isAjax()) {
			$password = input('password');
			$new_password = input('new_password');
            $user_one = Db('user')->where('id',session('user_id'))->field('user_password,id,user_salt')->find();
            if (!empty($user_one) && md5(md5($password) . $user_one['user_salt']) == $user_one['user_password']) {
                //如果原密码与新密码相同
                if ($password == $new_password) {
                    return json(array('status' => 1, 'msg' => '修改成功'));
                }
                $data = array('user_password' => md5(md5($new_password) . $user_one['user_salt']));
                $res = db('user')->where('id',$user_one['id'])->update($data);
                if ($res) {
                    return json(array('status' => 1, 'msg' => '修改密码成功'));
                } else {
                    return json(array('status' => 0, 'msg' => '修改密码失败'));
                }
            }else {
				$this->error('旧密码输入错误');
			}
		} else {
			return $this->fetch();
		}

	}



	/**
	 * 绑定手机
	 */
	public function bindMobile ()
	{
		if ($this->request->isAjax()) {
            $password = input('password');
            $type = input('type');
            $code = input('code');//验证码
            $mobile = input('mobile');

            //验证手机验证码
            if (session('mobile') == $mobile && session('mobile_time') >= time()) {
                if (session('mobile_code') != $code) {
                    return json(array('status' => 0, 'msg' => '手机验证码不正确'));
                }
            } else {
                return json(array('status' => 0, 'msg' => '手机验证码已过期'));
            }
            session('mobile', null);
            session('mobile_code', null);
            session('mobile_time', null);
            $res = db('user')->where('id',session('user_id'))->update(array('user_mobile'=>$mobile));
            if ($res) {
                return json(array('status' => 1, 'msg' => '绑定手机号码成功'));
            }else{
                return json(array('status' => 0, 'msg' => '绑定手机号码失败'));
            }

		} else {
            $res = db('user')->where('id',session('user_id'))->field('user_mobile')->find();
            if (empty($res['user_mobile'])) {
                return $this->fetch();
            }else{
                //手机号已绑定，跳转换绑手机
                $this->redirect('UserMessage/upMobile');
            }
		}
	}

    /**
	 * 换绑手机
	 */
	public function upMobile ()
	{
        if ($this->request->isAjax()) {
            $password = input('password');
            $type = input('type');
            $code = input('code');//验证码
            $mobile = input('mobile');

            //验证手机验证码
            if (session('mobile') == $mobile && session('mobile_time') >= time()) {
                if (session('mobile_code') != $code) {
                    return json(array('status' => 0, 'msg' => '手机验证码不正确'));
                }
            } else {
                return json(array('status' => 0, 'msg' => '手机验证码已过期'));
            }
            session('mobile', null);
            session('mobile_code', null);
            session('mobile_time', null);
            $res = db('user')->where('id',session('user_id'))->update(array('user_mobile'=>$mobile));
            if ($res) {
                return json(array('status' => 1, 'msg' => '换绑手机号码成功'));
            }else{
                return json(array('status' => 0, 'msg' => '换绑手机号码失败'));
            }
        } else {
            $res = db('user')->where('id',session('user_id'))->field('user_mobile')->find();
            //替换中间四位数字
            if (!empty($res['user_mobile'])) {
                $res['user_mobile'] = hide_phone($res['user_mobile']);
            }
            if (empty($res['user_mobile'])) {
                //手机号已绑定，跳转换绑手机
                $this->redirect('UserMessage/bindMobile');
            }else{
                $this->assign([
                    'user_mobile' => $res
                ]);
                return $this->fetch();
            }
        }
    }


	/**
	 * 绑定邮箱
	 */
	public function bindEmail ()
	{
        if ($this->request->isAjax()) {
            $password = input('password');
            $type = input('type');
            $code = input('code');//验证码
            $email = input('email');

            //验证手机验证码
            if (session('email_number') == $mobile && session('email_time') >= time()) {
                if (session('email_code') != $code) {
                    return json(array('status' => 0, 'msg' => '邮箱验证码不正确'));
                }
            } else {
                return json(array('status' => 0, 'msg' => '邮箱验证码已过期'));
            }
            session('email_number', null);
            session('email_code', null);
            session('email_time', null);
            $res = db('user')->where('id',session('user_id'))->update(array('user_email'=>$email));
            if ($res) {
                return json(array('status' => 1, 'msg' => '绑定邮箱号码成功'));
            }else{
                return json(array('status' => 0, 'msg' => '绑定邮箱号码失败'));
            }

		} else {
            $res = db('user')->where('id',session('user_id'))->field('user_email')->find();
            if (empty($res['user_email'])) {
                return $this->fetch();
            }else{
                //手机号已绑定，跳转换绑手机
                $this->redirect('UserMessage/upMobile');
            }
		}
	}

    /**
     * 换绑邮箱
     */
    public function upEmail ()
    {
        if ($this->request->isAjax()) {
            $password = input('password');
            $type = input('type');
            $code = input('code');//验证码
            $email = input('email');

            //验证手机验证码
            if (session('email_number') == $email && session('email_time') >= time()) {
                if (session('email_code') != $code) {
                    return json(array('status' => 0, 'msg' => '邮箱验证码不正确'));
                }
            } else {
                return json(array('status' => 0, 'msg' => '邮箱验证码已过期'));
            }
            session('email_number', null);
            session('email_code', null);
            session('email_time', null);
            $res = db('user')->where('id',session('user_id'))->update(array('user_email'=>$email));
            if ($res) {
                return json(array('status' => 1, 'msg' => '换绑邮箱号码成功'));
            }else{
                return json(array('status' => 0, 'msg' => '换绑邮箱号码失败'));
            }
        } else {
            $res = db('user')->where('id',session('user_id'))->field('user_email')->find();
            //替换中间四位数字
            if (!empty($res['user_email'])) {
                $res['user_email'] = hide_phone($res['user_email']);
            }
            if (empty($res['user_email'])) {
                //邮箱号已绑定，跳转换绑邮箱
                $this->redirect('UserMessage/bindemail');
            }else{
                $this->assign([
                    'user_email' => $res
                ]);
                return $this->fetch();
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

    /**
     * 手机/邮箱验证码获取
     */
    public function sendCode()
    {
        $mobile = input('mobile');
		$email = input('email');
		$type = input('type');
        $code = rand(100000, 999999);

        $post = $this->request->param();
        //验证  唯一规则： 表名，字段名，排除主键值，主键名
        $validate = new \think\Validate([
            ['verify','require|captcha','验证码不能为空|验证码不正确'],
        ]);
        //验证部分数据合法性
        if (!$validate->check($post)) {
            $this->error('发送失败：' . $validate->getError());
        }

        //如果是手机验证码
        if ($type == "mobile") {
            $user_one = Db('user')->where('user_mobile',$mobile)->find();
            if (!empty($user_one)) {
                return json(array('status' => 0, 'msg' => '手机号码已经注册,请换一个试试'));
            }
            //发送验证码
            if (session('mobile') == $mobile && session('mobile_time') > time()) {
                return json(array('status' => 0, 'msg' => '请于5分钟之后再来发送'));
            }
            //从数据库获取短信宝账号密码
            $mobile_data = db('smspo')->where('id','1')->find();
            $username = $mobile_data['username'];
            $password = $mobile_data['password'];

            $res = $this->mobile_code($mobile, $code ,$username ,$password);
            //验证码写入session
            session('mobile_code', $code);
            if ($res == '短信发送成功') {
                session('mobile', $mobile);
                session('mobile_time', time() + 600);
                return json(array('status' => 1, 'msg' => '发送成功,请注意用手机查收'));
            } else {
                return json(array('status' => 0, 'msg' => '发送失败'));
            }
        } else {
            //邮箱注册
            $user_one = Db('user')->where('user_email',$email)->find();
            if (!empty($user_one)) {
                return json(array('status' => 0, 'msg' => '邮箱已经注册,请换一个试试'));
            }
            //发送验证码
            if (session('email') == $email && session('email_time') > time()) {
                return json(array('status' => 0, 'msg' => '请于5分钟之后再来发送'));
            }
            //发送邮件
            $emailres = $this->SendMail($email, $code);
            //验证码写入session
            session('email_code', $code);
            if ($emailres == true) {
                session('email_number', $email);
                session('email_time', time() + 600);//有效期加十分钟
                return json(array('status' => 1, 'msg' => '发送成功,请注意邮箱查收'));
            } else {
                return json(array('status' => 0, 'msg' => '发送失败'));
            }
        }
    }



    /**
     * [SendMail 邮件发送]
     * @param [type] $email  [description]
     * @param [type] $title    [description]
     * @param [type] $message  [description]
     * @param [type] $from     [description]
     * @param [type] $fromname [description]
     * @param [type] $smtp     [description]
     * @param [type] $username [description]
     * @param [type] $password [description]
     */
    function SendMail($email, $code)
    {
        vendor('phpmailer.PHPMailerAutoload');
        //vendor('PHPMailer.class#PHPMailer');
        $mail = new \PHPMailer();
         // 设置PHPMailer使用SMTP服务器发送Email
        $mail->IsSMTP();
        // 设置邮件的字符编码，若不指定，则为'UTF-8'
        $mail->CharSet='UTF-8';
        // 添加收件人地址，可以多次使用来添加多个收件人
        $mail->AddAddress($email);

        $data = \think\Db::name('emailconfig')->where('email','email')->find();
                $title = $data['title'];
                $message = "欢迎注册水果鲜生，您的验证码为 $code 在10分钟内有效。";
                $from = $data['from_email'];
                $fromname = $data['from_name'];
                $smtp = $data['smtp'];
                $username = $data['username'];
                $password = $data['password'];
        // 设置邮件正文
        $mail->Body=$message;
        // 设置邮件头的From字段。
        $mail->From=$from;
        // 设置发件人名字
        $mail->FromName=$fromname;
        // 设置邮件标题
        $mail->Subject=$title;
        // 设置SMTP服务器。
        $mail->Host=$smtp;
        // 设置为"需要验证" ThinkPHP 的config方法读取配置文件
        $mail->SMTPAuth=true;
        //设置html发送格式
        $mail->isHTML(true);
        // 设置用户名和密码。
        $mail->Username=$username;
        $mail->Password=$password;
        // 发送邮件。
        return($mail->Send());
    }


    /**
      * 发送短信
      * @param [type] $mobile 手机号
      * @param [type] $code 随机生成的验证码
      * @param [type] $username 用户名
      * @param [type] $password 密码
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



    /**
     * 生成验证码
     */
    public function verify()
    {
        ob_clean();//清除缓存
        $captcha = new Captcha();
        return $captcha->entry();
    }




}
