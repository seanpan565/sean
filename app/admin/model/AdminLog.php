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


namespace app\admin\model;

use \think\Model;
class AdminLog extends Model
{
	public function admin()
    {
        //关联管理员表
        return $this->belongsTo('Admin');
    }


    public function menu()
    {
        //关联菜单表
        return $this->belongsTo('AdminMenu');
    }
}
