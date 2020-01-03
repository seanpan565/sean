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
class Register extends Validate
{
    protected $rule=[
        'password'                =>'require|max:32|min:6|chsDash|token',
    ];

    protected $message=[
        'name.require'            =>'密码不得为空！',
        'name.max:15'             =>'密码不能超过32个字节',
        'name.min:6'              =>'密码最小为6个字节',
        'name.chsAlpha'           =>'密码格式只能是汉字、字母、数字和下划线_及破折号-',
    ];


}