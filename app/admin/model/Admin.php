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
class Admin extends Model
{
	public function admincate()
    {
        //关联角色表
        return $this->belongsTo('AdminCate');
    }

    public function article()
    {
        //关联文章表
        return $this->hasOne('Article');
    }

    public function log()
    {
        //关联日志表
        return $this->hasOne('AdminLog');
    }

    public function attachment()
    {
        //关联附件表
        return $this->hasOne('Attachment');
    }
}
