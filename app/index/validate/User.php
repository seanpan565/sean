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
namespace app\index\Validate;
use think\Validate;
class User extends Validate
{
    protected $rule=[
        'user_name'              =>'require|token',
        'user_password'          =>'require|alphaDash',
        'captcha'                =>'require|captcha',
    ];

    protected $message=[
        'user_name.require'       =>'用户名不得为空！',
        'user_password.require'   =>'密码不得为空！',
        'user_password.alphaDash' =>'密码格式只能为字母、数字和下划线_及破折号-',
        'captcha.require'         =>'验证码不得为空！',
        'captcha.captcha'         =>'验证码不正确',
    ];

    protected $scene=[
	    'login'                   =>['user_name','user_password','captcha'],
		'add'                     =>['user_name','user_password','captcha'],
	];


}
