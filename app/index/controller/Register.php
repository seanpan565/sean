<?php
// +----------------------------------------------------------------------
// | Author [ 小钻风 ]
// +----------------------------------------------------------------------
// | Time:2019-11-9
// +----------------------------------------------------------------------
// | Blog ( http://www.seanpan.top )
// +----------------------------------------------------------------------
// | Email: < seanpan565@gmail.com >
// +----------------------------------------------------------------------
namespace app\index\controller;
use think\captcha\Captcha;
use think\Loader;
use think\Db;
use think\Cookie;
use think\Session;
use app\index\controller\Common;
class Register extends Common
{
    /**
     * 显示用户注册页面
     */
    public function index()
    {
        //检查用户是否已经登录
		$this->checkLogin();
        return $this-> fetch();
    }

    /**
     * 保存用户注册信息
     */
    public function register()
    {
        $password = input('password');
        $type = input('type');
        $code = input('code');//验证码
        $mobile = input('mobile');
        $email = input('email');

        //密码及表单令牌验证
        $validate = validate('Register');
        if(!$validate->check($this->request->post())){
            $this->error($validate->getError());
        }
        //判断是邮箱注册还是手机注册
        if ($type == "mobile") {
            //验证手机验证码
            if (session('mobile') == $mobile && session('mobile_time') >= time()) {
                if (session('mobile_code') != $code) {
                    return json(array('status' => 0, 'msg' => '手机验证码不正确'));
                }
            } else {
                return json(array('status' => 0, 'msg' => '手机验证码已过期'));
            }
        } else {
            //验证邮箱验证码
            if (session('email_number') == $email && session('email_time') >= time()) {
                if (session('email_code') != $code) {
                    return json(array('status' => 0, 'msg' => '邮箱验证码不正确'));
                }
            } else {
                return json(array('status' => 0, 'msg' => '邮箱验证码已过期'));
            }
        }
        session('mobile', null);
        session('mobile_code', null);
        session('mobile_time', null);
        session('email_number', null);
        session('email_code', null);
        session('email_time', null);
        if ($type == "mobile") {
            $data = array(
                'user_mobile' => $mobile,
                'user_password' => $password,
                'user_status' => 1,
                'update_time' => time(),
                'user_reg_time' => time(),
                'user_reg_ip' => get_client_ip(),
                'user_login_time' => time(),
                'user_login_ip' => time(),
                'user_salt' => getRandKey(),
            );
        }else{
            $data = array(
                'user_email' => $email,
                'user_password' => $password,
                'user_status' => 1,
                'update_time' => time(),
                'user_reg_time' => time(),
                'user_reg_ip' => get_client_ip(),
                'user_login_time' => time(),
                'user_login_ip' => time(),
                'user_salt' => getRandKey(),
            );
        }
        $data['user_password'] = md5(md5($data['user_password']) . $data['user_salt']);
        $res = Db('user')->insert($data);
        if ($res) {
            //统计注册量
			$this->staUser();
            return json(array('status' => 1, 'msg' => '注册成功'));
        }else{
            return json(array('status' => 0, 'msg' => '注册失败'));
        }
    }

    /*
    * 每天注册量
     */
    public function staUser()
    {
        //统计每一天的时间
		$stat_time_start = strtotime(date('Y-m-d 00:00:00'));
        //统计每天用户注册量
        $stat_one = Db('stat_user')->where(array('stat_time' => $stat_time_start))->find();
		if (!empty($stat_one)) {
            Db::name('stat_user')->where(array('stat_time' => $stat_time_start))->setInc('stat_num', 1);
		} else {
			$stat_data = array(
				'stat_num' => 1,
				'stat_time' => $stat_time_start,
			);
            Db::name('stat_user')->insert($stat_data, 0, 1);
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
                return json(array('status' => 0, 'msg' => '手机号码已经绑定,请换一个试试'));
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
     * 用户登录页面显示
     */
    public function login()
    {
        //检查用户是否已经登录
		$this->checkLogin();
        $log_username = Cookie::get('log-username');
        $log_password = Cookie::get('log-password');
        $this->assign([
            'log_username' => $log_username,
            'log_password' => $log_password,
        ]);
        if(Cookie::has('userlogin')) {
            $this->assign('userlogin',Cookie::get('userlogin'));
        }
        return $this-> fetch();
    }

    /**
     * 用户登录
     */
    public function loginRes($data)
    {
        if (!Request()->isAjax()) {
            return json(array('status' => 0, 'msg' => '请求类型错误'));
        } else {
            //表单数据验证
            $validate = validate('User');
            if(!$validate->scene('login')->check($data)){
                $this->error($validate->getError());
            }
            $username = $data['user_name'];
            //根据你用户名或者手机号码或者邮箱
            $user_Data = db('user')
                ->where('user_name' , $username)
                ->whereOr('user_mobile' , $username)
                ->whereOr('user_email' , $username)
                ->field('user_name,user_mobile,user_email')
                ->find();

            //判断用户是否存在
            if (empty($user_Data)) {
                return json(array('status' => 0, 'msg' => '用户名或密码不正确'));
            }
            $user_one = db('user')
                ->where('user_name' , $username)
                ->whereOr('user_mobile' , $username)
                ->whereOr('user_email' , $username)
                ->field('user_name,user_mobile,user_email,user_password,user_salt,id')
                ->find();

            //密码要与随机验证码加密
            if ($user_one['user_password'] == md5(md5($data['user_password']) . $user_one['user_salt']) || $user_one['user_password'] == Cookie::get('log-password')) {
                //判断是否记住账号,设置cookie
                if(!empty($data['remember']) and $data['remember'] == 1) {
                    //检查当前账号的cookie
                    if(Cookie::has('log-username')) {
                        Cookie::delete('log-username');
                        Cookie::delete('log-password');
                    }
                    //保存新的cookie,有效期一周
                    Cookie::set('log-username', $username ,86400 * 7);
                    Cookie::set('log-password', $user_one['user_password'] ,86400 * 7);
                } else {
                    //未选择记住账号，或属于取消操作
                    if(Cookie::has('log-username')) {
                        Cookie::delete('log-username');
                        Cookie::delete('log-password');
                    }
                }

                //设置session
                session('user_id', $user_one['id']);
                session('login_time', date('Y-m-d H:i:s', time()));
                session('login_ip', get_client_ip());

                //更新用户本地登录信息
                $data = array(
                    'user_login_time' => time(),
                    'user_login_ip' => get_client_ip(),
                );
                db('user')->where('id' , $user_one['id'])->update($data);

                //判断商品是否已经收藏过了
                // $goods_collect_one = db('goods_collect')->where('goods_id' , input('goods_id'))->field('collect_id' , $user_one['id'])->find();
                // if (!empty($goods_collect_one)) {
                //     $goods_collect_status = 1;
                // } else {
                //     $goods_collect_status = 0;
                // }
                //设置浏览足迹
                // $recent_view_data = $this->_getRecentView();
                // if (!empty($recent_view_data)) {
                //     foreach ($recent_view_data as $k => $v) {
                //         $this->_setUserRecentView($v, $user_one['uid']);
                //     }
                //     //清除cookie
                //     $this->_clearRecentView();
                // }
                return json(array('status' => 1, 'msg' => '登录成功'));
            } else {
                return json(array('status' => 0, 'msg' => '账号或者密码错误'));
            }

        }

    }

    /**
     * 检查用户是否登录
     */
    private function checkLogin ()
    {
        if (session('user_id') > 0) {
            $this->redirect('User/index');
        }
    }

    /**
     * 注销登录
     */
    public function logout()
    {
        session('user_id', null);
        $this->success('退出成功', url('register/login'));
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
