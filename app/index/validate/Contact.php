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
class Contact extends Validate
{
    protected $rule=[
        'name'                   =>'require|max:15|min:2|chsAlpha',
        'email'                  =>'require|email',
        'message_title'          =>'require|max:50|chsAlpha',
    ];

    protected $message=[
        'name.require'            =>'用户名不得为空！',
        'name.max:15'             =>'用户名不能超过15个字节',
        'name.min:2'              =>'用户名最小为2个字节',
        'name.chsAlpha'           =>'用户名格式只能是汉字或字母',
        'email.require'           =>'邮箱不得为空！',
        'email.email'             =>'请填写正确的邮箱',
        'message_title.require'           =>'标题不得为空！',
        'message_title.max:50'            =>'标题不能超过50个字节',
        'message_title.chsAlpha'          =>'标题格式只能是是汉字或字母',
    ];


}
